<?php

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

Route::get('/',function(){return view('welcome');});
Route::get('/noPermission', function(){return view('permission.noPermission');});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::apiResource('/People','PersonController',['only'=>['index','store','update']]);
Route::apiResource('/Email','EmailController',['only'=>['index','store','update','destroy']]);
Route::get('/Email/Rechazadas/{slug}',['as'=>'Email.rechazada', 'uses'=>'EmailController@rechazada']);
Route::get('/Email/Uso/{slug}',['as'=>'Email.uso', 'uses'=>'EmailController@uso']);
Route::get('/People/EditDate/{slug}',['as'=>'People.editDate', 'uses'=>'PersonController@editDate']);
Route::get('/People/Delete/{slug}',['as'=>'People.delete', 'uses'=>'PersonController@destroy']);
Route::apiResource('/Pays','PayController');
Route::get('/Pay/EditStatus/{id}',['as'=>'Pay.editStatu', 'uses'=>'PayController@editStatu']);
Route::get('/Pay/EditStatus5/{id}',['as'=>'Pay.editStatu5', 'uses'=>'PayController@editStatu5']);
Route::get('/Pay/SeFueALaPuta/{id}',['as'=>'Pay.Baniada', 'uses'=>'PayController@baniada']);