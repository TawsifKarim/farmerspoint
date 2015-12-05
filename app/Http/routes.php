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


  /*  Route::get('/PointList', function () {
        return view('frontend.PointList');
    }); 

    Route::get('/CropList', function () {
        return view('frontend.CropList');
    }); */

    Route::get('/AboutUs', function () {
        return view('frontend.AboutUs');
    });

    Route::get('/SiteAdmin', function () {
        return view('frontend.SiteAdmin');
    });

    Route::get('/ContactUs', function () {
        return view('frontend.ContactUs');
    });


    /* Route::get('/AdminPanel', function () {
        if(Auth::check()){
           
           if(Auth::user()->user_type_id==1){
            return view('frontend.AdminPanel');       
            }
           else{
            return view ('auth/login');  
        }
       }
     }); */

     
   /*   Route::get('/AgentPanel', function () {
        if(Auth::check()){
           
           if(Auth::user()->user_type_id==2){
            return view('frontend.AgentPanel');       
            }
           else{
            return view ('auth/login');  
            }   
        }
     }); */


      
    

    
    //guest routes
    Route::resource('/farmerPoint','farmerPointController',['only' => ['index', 'show']]);
    Route::resource('/crop','cropController',['only' => ['index', 'show']]);
    
    //Admin routes

    Route::group(['middleware' => 'auth'], function () {
    Route::resource('agent','agentController');
    Route::resource('farmer','farmerController');
    Route::resource('farmer.crop','farmerCropController');
    Route::resource('cropType','cropTypeController');
    Route::resource('crop','cropController',['except' => ['index','show']]);
    Route::resource('farmerPoint','farmerPointController',['except' => ['index','show']]);
    Route::get('/AdminPanel',function(){
       return view('frontend.AdminPanel');
      });
    });

    //agent routes
       Route::group(['middleware' => 'agent'], function () {
       Route::resource('farmer','farmerController');
       Route::resource('farmer.crop','farmerCropController');
       Route::resource('agent','agentController',['only' => ['index','show']]);
       Route::get('/AgentPanel',function(){
        return view('frontend.AgentPanel'); 
       });
    });

    
    





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
