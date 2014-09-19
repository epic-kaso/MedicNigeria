<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', function()
{
    Mail::send('emails.default',['body'=>'hello kaso'],function($job){
       $job->to('kasoprecede47@gmail.com');
    });
	return View::make('pages.landing_page');
});


Route::get('/app', function()
{
    return View::make('pages.index');
});


    /**
     * Solve public folder assets problem
     */
Route::get('/public/{any}/{another}',function($any,$another){
    return Redirect::to("/$any/$another");
});