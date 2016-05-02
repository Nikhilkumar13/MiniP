<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Incidents extends Model
{

	public $timestamps = false;

    public function createIncidentInDB(Request $request)
    {
              


        $this->uid = 'cs1120238';
        $this->lat = $request->input('lat');
        $this->lng = $request->input('lng');
        $this->location = $request->input('location');
        $this->type = $request->input('type');
        $this->age = $request->input('age');
        $this->comment = $request->input('comment');
        $this->gender = $request->input('gender');
        $this->created_at=date($request->input('date') ." " . $request->input('time'));

        $randString = md5(time()); 


        $file = $request->file('image');
        $filename=$randString .'.'.$file->getClientOriginalExtension();
        
        $request->file('image')->move("caseimage",$filename);
        $this->url=$filename;

        $this->save();

    }


}
