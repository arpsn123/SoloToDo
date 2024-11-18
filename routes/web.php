<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return view("first");
});

Route::post('/todo', function(){
    return view("todo_list");
});



