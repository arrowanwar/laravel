<?php

use App\Http\Controllers\redirectController;
use Illuminate\Support\Facades\Route;



//Route::get('/', function () {
//    return view('welcome');
//});

//Route::Get("/demo",[TestController::class,'index']);
//Route::GET("/test", function (){
//    return view('testView', ['name'=>'Anwar']);
//});
Route::get('/flashmsg', function () {
    return view('/redirect');
});
Route::get('/redirectmsg', [redirectController::class, 'redirect']);

Route::view('/form', 'form');
Route::post('/form', [redirectController::class, 'formSubmit']);
