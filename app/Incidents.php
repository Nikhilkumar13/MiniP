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
        $this->uid = $request->input('uid');
        $this->lng = $request->input('lng');
        $this->type = $request->input('type');
        $this->created_at=date($request->input('date') ." 0:0:0");
        $this->save();

    }
}
