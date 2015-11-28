<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*--------------for test---------------*/

Route::get('/ap',function(){
   return view('agent.agentprofile');
});

Route::get('/af',function(){
   return view('agent.agentRegistration');
});

Route::get('/cr',function(){
   return view('crop.cropRegister');
});

Route::get('/ctr',function(){
   return view('crop.CropTypeRegistration');
});

Route::get('/cp',function(){
   return view('crop.Cropprofile');
});


Route::get('/fp',function(){
   return view('farmerPoint.createFarmerPoint');
});

Route::get('/fd',function(){
   return view('farmerPoint.FarmerPointDetail');
});




/*--------------front end routes---------------*/

Route::get('/', function () {
    return view('frontend.home');
});


Route::get('/PointList', function () {
    return view('frontend.PointList');
});

Route::get('/CropList', function () {
    return view('frontend.CropList');
});

Route::get('/AboutUs', function () {
    return view('frontend.AboutUs');
});

Route::get('/SiteAdmin', function () {
    return view('frontend.SiteAdmin');
});

Route::get('/ContactUs', function () {
    return view('frontend.ContactUs');
});

Route::get('/login', function () {
    return view('frontend.login');
});

/*front end route ends*/


/*resource controller*/

Route::resource('farmer','farmerController');
Route::resource('farmerCrop','farmerCropController');
Route::resource('agent','agentController');
Route::resource('cropType','cropTypeController');
Route::resource('crop','cropController');
Route::resource('farmerPoint','farmerPointController');



