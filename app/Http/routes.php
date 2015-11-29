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
    Route::resource('farmer.crop','farmerCropController');
    Route::resource('agent','agentController');
    Route::resource('cropType','cropTypeController');
    Route::resource('crop','cropController');
    Route::resource('farmerPoint','farmerPointController');





    // Authentication routes...
    Route::get('auth/login', 'Auth\AuthController@getLogin'); //get login view page
    Route::post('auth/login', 'Auth\AuthController@postLogin'); //after submit goes to this page
    Route::get('auth/logout', 'Auth\AuthController@getLogout'); 
    // Password reset link request routes...
    Route::get('password/email', 'Auth\PasswordController@getEmail');
    Route::post('password/email', 'Auth\PasswordController@postEmail');
    // Password reset routes...
    Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
    Route::post('password/reset', 'Auth\PasswordController@postReset');
