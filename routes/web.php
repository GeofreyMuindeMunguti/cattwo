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
 
Route::get('/', function () {
    return view('home');
});
Route::get('/student', function () {
return view('94231.student');
});
Route::get('/fees', function () {
return view('94231.fees');
});

 
Route::post('fees','FeesController@saveFeesPayment');
Route::post('student','StudentController@register');
Route::get('checkFees/Fees','FeesController@checkFees');
Route::get('viewall/Fees','FeesController@feesall');
