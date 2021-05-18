<?php

use Illuminate\Support\Facades\Route;


Route::get('home', 'TestController@home')
       -> name('home');


Route::get('/details/{index}', 'TestController@details') 
        -> name('details');