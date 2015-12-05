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

     Route::get('/AdminPanel', function () {
        if(Auth::user()->user_type_id==1){
        return view('frontend.AdminPanel');       
        }
        return redirect('auth/login');
    });

      Route::get('/AgentPanel', function () {
        if(Auth::user()->user_type_id==2){
        return view('frontend.AgentPanel');       
        }
        return redirect('auth/login');
    });


      
    


    /*front end route ends*/


    /*resource controller*/

    Route::resource('farmer','farmerController');
    Route::resource('farmer.crop','farmerCropController');
    
   // Route::group(['middleware' => 'auth'], function () {
    Route::resource('agent','agentController');
    Route::resource('farmer','farmerController');
   // });

  //  Route::group(['middleware' => 'agent'], function () {
       Route::resource('farmer','farmerController');
    //});

    
    Route::resource('cropType','cropTypeController');
    Route::resource('crop','cropController');
    Route::resource('farmerPoint','farmerPointController');





    // Authentication routes...
    Route::get('auth/login',function(){
        return view('auth/login');
      });
    Route::post('auth/login', 'Auth\AuthController@postLogin'); //for login
    Route::get('auth/logout', 'Auth\AuthController@getLogout'); //for logout
     //after submit goes to this page

    // Password reset link request routes...
    Route::get('password/email', 'Auth\PasswordController@getEmail');
    Route::post('password/email', 'Auth\PasswordController@postEmail');
    // Password reset routes...
    Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
    Route::post('password/reset', 'Auth\PasswordController@postReset');
