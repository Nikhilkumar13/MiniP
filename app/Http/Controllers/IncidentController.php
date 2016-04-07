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
		// $date=date_create('2-3-2016');
		// return $request->get('sdate');
		// return $date;
        // return $date;

		// return date_format(date_create( "'".$request->get('sdate')."'").' ',"Y-m-d");;
		// return $request->get('sdate');
		 $startdate=$request->get('sdate');
		 $enddate=$request->get('edate');
		  // $stringdate= "'" .$request->get('sdate')."'";
		 // $sdate=date_create("'".$request->get('sdate')."'");
		 // return date_create("'".$request->get('sdate')."'");

		// $startdate= date_format(date_create($sdate),"Y-m-d");
        // return  $startdate;
		// $enddate= date_format(date_create($edate),"Y-m-d");
		// return $enddate;


		$data=DB::select('select * from incidents where created_at between '."'".$startdate."'" .' and '."'" .$enddate ."'".'  and type = '."'".$type."'",[]  );

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
