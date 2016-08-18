<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use \App;
use App\Flat;
use App\Tower;

class FlatController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */

    public function returnJSON()
    {
        return view('home');
    }

    public function formData(Request $request) 
    {
        return redirect('/admin/flat/'.$request->input('name'));
    }

    public function editFlat($id) 
    {
        $flat = Flat::where('flat_id', $id)->firstOrFail();
        return view('flat', $flat);
    }

    public function save(Request $request) 
    {
        $flat = Flat::where('flat_id', $request->input('flat_id'));
        $data = $request->all();
        unset($data['flat_id']);
        unset($data['_token']);
        $flat->update($data);
        return redirect('/admin/home');
    }

    public function home() 
    {
        $flats = Flat::all();
        return view('flat_view', ['flats' => $flats]);
    }

    public function tower() 
    {
        $towers = Tower::all();
        return view('tower', ['towers' => $towers]);
    }

    public function updateTower(Request $request) 
    {
        $completed = intval($request->get('completed'));
        $status = $request->get('status');

        // Validation
        if ($completed >= 0 && $completed <= 100) {
            $tower = Tower::find($request->get('id'));
            $tower->completed = $completed;
            $tower->status = $status;
            $tower->save(); 
        }

        return redirect('/admin/tower');
    }
}
