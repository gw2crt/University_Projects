<?php

use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    
    return view('welcome');
    
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/update', 'UpdateController@index');

Route::get('/update/create', 'UpdateController@create');

Route::post('/update', 'UpdateController@store');


Route::get('/userdetails', function () {
    
    return view('userdetails');
});

Route::get('/bmi', function () {
    
    $userid = Auth::id();
    
    $updatedat = DB::table('updates')->latest()->where('user_id', $userid)->value('created_at');
    
    $usrheightcm = DB::table('users')->where('id', $userid)->value('height');
    $usrweight = DB::table('users')->where('id', $userid)->value('weight');
    $usrheight = ($usrheightcm / 100);
    
    $bmiresult = round(($usrweight / ($usrheight*$usrheight)),1);
    
    DB::table('users')->where('id', $userid)->update(['bmi' => $bmiresult]);
    
    $updatedheight = DB::table('updates')->latest()->where('user_id', $userid)->value('height');
    $updatedweight = DB::table('updates')->latest()->where('user_id', $userid)->value('weight');
    
    $usrheight = ($updatedheight / 100);
    $updatedbmi = round(($updatedweight / ($usrheight*$usrheight)),1);
    
    DB::table('updates')->latest()->where('user_id', $userid)->update(['bmi' => $updatedbmi]);
    
    
    return view('bmi', compact('bmiresult', 'usrheight', 'usrweight', 'updatedheight', 'updatedweight', 'updatedbmi', 'updatedat'  ));
}); 

Route::get('/bloods', function () {
    
    $userid = Auth::id();
    
     $updatedat = DB::table('updates')->latest()->where('user_id', $userid)->value('created_at');
    
    $usrsystolic = DB::table('users')->where('id', $userid)->value('systolic');
    $usrdiastolic = DB::table('users')->where('id', $userid)->value('diastolic');
    
    $updatedsystolic = DB::table('updates')->latest()->where('user_id', $userid)->value('systolic'); 
    $updateddiastolic = DB::table('updates')->latest()->where('user_id', $userid)->value('diastolic');
        
    
    return view('bloods', compact('usrsystolic', 'usrdiastolic', 'updatedsystolic', 'updateddiastolic', 'updatedat' ));
}); 

           
Route::get('/monitor', function () {
    
    $userid = Auth::id();
    
    $updatedat = DB::table('updates')->latest()->where('user_id', $userid)->value('created_at');
        
    $updatedsystolic = DB::table('updates')->latest()->where('user_id', $userid)->value('systolic'); 
    $updateddiastolic = DB::table('updates')->latest()->where('user_id', $userid)->value('diastolic');
    
    $updatedheight = DB::table('updates')->latest()->where('user_id', $userid)->value('height');
    $updatedweight = DB::table('updates')->latest()->where('user_id', $userid)->value('weight');
    
    $usrheight = ($updatedheight / 100);
    $updatedbmi = round(($updatedweight / ($usrheight*$usrheight)),1);
    
    DB::table('updates')->latest()->where('user_id', $userid)->update(['bmi' => $updatedbmi]);
    
        
    return view('monitor', compact( 'updatedsystolic', 'updateddiastolic', 'updatedheight', 'updatedweight', 'updatedbmi', 'updatedat' ));
});





