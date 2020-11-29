<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace'=>'Ravi\demo\Http\Controllers'],function(){
    Route::get('demo','DemoController@index')->name('demo');
    Route::post('demo','DemoController@send');
});