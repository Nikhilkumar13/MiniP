<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	 DB::table('incidents')->insert([
            'type' => 'mosquito',
            'lat' => 28.549013499998987,
            'lng' => 77.18317139999999,
            'radius'=>100.0,
        ]);
    	 DB::table('incidents')->insert([
            'type' => 'mosquito',
            'lat' => 28.5411239013499999997,
            'lng' => 77.18317139999999,
            'radius'=>100.0,
        ]);
    	 DB::table('incidents')->insert([
            'type' => 'mosquito',
            'lat' => 28.549123013499999997,
            'lng' => 77.18123317139999999,
            'radius'=>100.0,
        ]);
    	 DB::table('incidents')->insert([
            'type' => 'mosquito',
            'lat' => 28.543459013499999997,
            'lng' => 77.11238317139999999,
            'radius'=>100.0,
        ]);
    	 DB::table('incidents')->insert([
            'type' => 'mosquito',
            'lat' => 28.5678649013499999997,
            'lng' => 77.186786317139999999,
            'radius'=>100.0,
        ]);
        // $this->call(UserTableSeeder::class);
    }
}
