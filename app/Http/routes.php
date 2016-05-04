<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome',['sdate' => 'lol']);
});
Route::get('/try', function () {
    return view('try');
});
Route::get('/mapdata/', 'IncidentController@getMapData');
Route::get('/mycasedata/', 'IncidentController@getMyCaseData');
Route::put('/mycasedata/', 'IncidentController@deleteMyCaseData');
Route::get('/graphdata/', 'IncidentController@getGraphData');
Route::post('/savedata/','IncidentController@saveData');
Route::get('/map', function () {

	$ipAddress = $_SERVER['REMOTE_ADDR'];
if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
    $ipAddress = array_pop(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']));
    echo $ipAddress;
}
	$loc=GeoIP::getLocation($ipAddress);
    return view('map',['lat'=>$loc['lat'],'lon'=>$loc['lon']]);
});
Route::get('/try', function () {
    return view('try');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

// Route::group(['middleware' => ['web']], function () {
//     //
// });

// Route::group(['middleware' => 'web'], function () {
// 	Route::get('/', function () {
//     return view('welcome');
// });
    // Route::auth();

    // Route::get('/home', 'HomeController@index');
// });
