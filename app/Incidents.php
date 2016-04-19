<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Incidents extends Model
{

	public $timestamps = false;

    public function createIncidentInDB(Request $request)
    {

        $this->lat = $request->input('lat');
        $this->uid = 'cs1120238';
        $this->lng = $request->input('lng');
        $this->type = $request->input('type');
        $this->age = $request->input('age');
        $this->comment = $request->input('comment');
        $this->gender = $request->input('gender');
        $this->created_at=date($request->input('date') ." 0:0:0");
        $this->save();

    }
}
