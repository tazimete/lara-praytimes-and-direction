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
	
	/****User Panel*****/
	/*Dashboard -- Load Dashboard */
	Route::get('/','DashboardController@load_dashboard');
	
	/*Generate and download pdf*/    
	Route::get('/download/pray_time_table_pdf','DashboardController@generate_pdf');
	                                               
