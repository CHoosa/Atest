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

Route::get('/','controller420\index@getindex');
Route::post('/login','controller420\index@postlogin');
Route::get('{id}/status','controller420\index@getshowstatus');
Route::get('/logout','controller420\index@getlogout');
Route::get('/addmin','controller420\index@getaddmain');
Route::get('{id}/addstatus','controller420\index@getaddstatus');
Route::post('/checkstatus','controller420\index@potstatus');

