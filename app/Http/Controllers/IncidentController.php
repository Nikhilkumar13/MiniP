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
	


		$data=DB::select('select lat, lng, gender, age,  DATE_FORMAT(created_at,"%h:%i:%p") as time, comment,DATE_FORMAT(Date(created_at) ,"%d-%m-%Y") as formated_date, url from incidents where Date(created_at) between '."'".$startdate."'" .' and '."'" .$enddate ."'".'  and type = '."'".$type."'",[]  );

		return $data;
	}

	public function getGraphData(Request $request)
	{
		$type=$request->get('type');
		$startdate=$request->get('sdate');
		$enddate=$request->get('edate');
		$data=[];
			
		$data=DB::select('select date(created_at) as date ,count(date(created_at)) as Count  from incidents where Date(created_at) between ' ."'".$startdate."'" .' and '."'" .$enddate ."'".' and type = '."'".$type."'". ' group by date(created_at) ;');

		 // select date(created_at) as date , count(date(created_at)) as Count from incidents where created_at between '2016-1-1' and '2016-5-1' and type= 'mosquito' group by  date(created_at);



		return $data;
	}


	public function saveData(Request $request)
	{



		$this->validate($request, [
        'type' => 'required',
        'gender' => 'required|max:6',
        'lat' => 'required',
        'lng' => 'required',
        'comment' => 'required|max:250|string',
        'age' => 'required|digits_between:1,2|integer',
        'date' => 'required',
    ]);

		



		$incident= new Incidents();
		$incident->createIncidentInDB($request);

		return "Succes";
	}

	public function getMyCaseData(Request $request)
	{

		//check for session authentication
		$uid=$request->get('uid');
		$data=DB::select('select id ,created_at as date , location , type from incidents where uid =' . "'". $uid . "'" );
		return $data;

	}

	public function deleteMyCaseData(Request $request)
	{
		//check for session authenticatio
		$caseid= $request->get('id');
		DB::table('incidents')->where('id' ,'=',$caseid)->delete();
	}


    }
