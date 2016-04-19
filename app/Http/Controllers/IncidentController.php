<?php

namespace App\Http\Controllers;

// use App\Http\Requests\Request;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Incidents;

use DB;
use Input;

class IncidentController extends Controller
{

	public function getMapData(Request $request)
	{
		$type=$request->get('type');

		 $startdate=$request->get('sdate');
		 $enddate=$request->get('edate');
	


		$data=DB::select('select lat, lng, gender, age, comment, created_at, url from incidents where created_at between '."'".$startdate."'" .' and '."'" .$enddate ."'".'  and type = '."'".$type."'",[]  );

		return $data;
	}

	public function getGraphData(Request $request)
	{
		$type=$request->get('type');
		$startyear=$request->get('syear');
		$endyear=$request->get('eyear');
		$data=DB::select('select year(created_at) as Year , month(created_at) as Month, count(*) as Count  from incidents where year(created_at) between ' .$startyear. ' and ' . $endyear .' and type = '."'".$type."'". ' group by year(created_at),month(created_at) ;');

		return $data;
	}


	public function saveData(Request $request)
	{
		$incident= new Incidents();
		$incident->createIncidentInDB($request);

		return "Succes";
	}
    //
}
