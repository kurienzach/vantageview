<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use \App;
use \App\Data\TheTreeSceneData;
use \App\Data\ProjectMapping;
use App\Flat;
use App\Tower;
use App\Project;

class JSONController extends Controller
{
    public function test (Request $request) {
        return ProjectMapping::make();
    }

    public function returnJSON(Request $request, $project_name, $id)
    {
        // $id is of the form 1A ie. its requesting for data of all floors
        // in tower 1A
        $project_id = Project::where('code_name', strtolower(str_replace(' ', '', $project_name)))->first();
        if ($project_id == Null)
            abort(404);
        else
            $project_id = $project_id->id;

        $flats = Flat::where('project_id', $project_id)->where('flat_id', 'like', $id."-%")->get();
        if (sizeof($flats) == 0)
            abort(404);

        $major_output = array();
        $output = array();

        foreach ($flats as $flat) { 
            $temp_flat = collect();
            $temp_flat->put('area', $flat->area);
            $temp_flat->put('availability', $flat->availability);
            $temp_flat->put('basic_rate', $flat->basic_rate);
            $temp_flat->put('category', $flat->category);
            $temp_flat->put('type', $flat->type);
            $temp_flat->put('other_charges', $flat->other_charges);
            $temp_flat->put('agreement_value', $flat->agreement_value);
            $temp_flat->put('grand_total', $flat->grand_total);

            // Calculate floor string
            //$floor_no = intval((intval(substr($flat->flat_id,3)) / 100)) * 100;
            $floor_no = intval(intval(explode("-", $flat->flat_id)[1]) / 100) * 100;
            $floor_string = $id."-".strval($floor_no);
            if (array_key_exists($floor_string, $output)) {
                $output[$floor_string][$flat->flat_id] = $temp_flat;
            }
            else {
                $output[$floor_string][$flat->flat_id] = array();
                $output[$floor_string][$flat->flat_id] = $temp_flat;      
            }
        }

        // Add completion status data to the JSON
        $completion = collect();
        $tower_data = Tower::where('project_id', $project_id)->where('tower_id', $id)->first();
        if ($tower_data == Null)
            abort(404);

        $completion->put('percentage', $tower_data->completed);
        $completion->put('status', $tower_data->status);
        $output[$id."-completed"] = $completion;
        return response()->json($output)->setCallback($request->input('callback'));
    }

}
