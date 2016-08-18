<?php

use App\Tower;
use Illuminate\Database\Seeder;

class TowersTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('towers')->delete();
        Tower::create([ "project_id" => "1", "tower_id" => "1A", "completed" => "25", "status" => "25% completed as of July 31sr 2015" ]);
        Tower::create([ "project_id" => "1", "tower_id" => "1B", "completed" => "50", "status" => "25% completed as of July 31sr 2015" ]);
        Tower::create([ "project_id" => "1", "tower_id" => "1C", "completed" => "49", "status" => "25% completed as of July 31sr 2015" ]);
        Tower::create([ "project_id" => "1", "tower_id" => "2A", "completed" => "30", "status" => "25% completed as of July 31sr 2015" ]);
        Tower::create([ "project_id" => "1", "tower_id" => "2B", "completed" => "75", "status" => "25% completed as of July 31sr 2015" ]);
        Tower::create([ "project_id" => "1", "tower_id" => "2C", "completed" => "80", "status" => "25% completed as of July 31sr 2015" ]);
	}
}
