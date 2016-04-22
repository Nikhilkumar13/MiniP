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
		$startdate=$request->get('sdate');
		$enddate=$request->get('edate');
		$data=[];
			
		$data=DB::select('select date(created_at) as date ,count(date(created_at)) as Count  from incidents where created_at between ' ."'".$startdate."'" .' and '."'" .$enddate ."'".' and type = '."'".$type."'". ' group by date(created_at) ;');

		 // select date(created_at) as date , count(date(created_at)) as Count from incidents where created_at between '2016-1-1' and '2016-5-1' and type= 'mosquito' group by  date(created_at);



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
