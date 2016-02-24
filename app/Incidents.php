<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Incidents extends Model
{
    public function createIncidentInDB(Request $request)
    {
        $this->lat = $request->input('lat');
        $this->lng = $request->input('lng');
        $this->type = $request->input('type');
        $this->radius=$request->input('radius');
        $this->save();

    }
}
