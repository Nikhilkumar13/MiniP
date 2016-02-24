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

	public function getData(Request $request)
	{
		$type=$request->get('type');
		$data=DB::table('incidents')->where('type',$type)->get();

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
