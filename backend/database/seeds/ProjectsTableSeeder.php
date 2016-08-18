<?php

use App\Project;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('projects')->delete();
        Project::create([ "name" => "The Tree" ]);
	}
}
