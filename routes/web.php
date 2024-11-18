<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\uploadtodo;
use App\Http\Controllers\getdatafromtodo;
use App\Http\Controllers\deletecontroller;



Route::get('/', function () {
    // return view('welcome');
    return view("first");
});

Route::post('/todo', function(){
    return view("todo_list");
});

Route::post('/upload', [uploadtodo::class, 'submit'])->name('todo.submit');

Route::get('/getdata',[getdatafromtodo::class, 'getdata'])->name('todo.getdata');

Route::post('/delete', [uploadtodo::class, 'submit'])->name('todo.submit');

Route::delete('/todo/{id}', [deletecontroller::class, 'destroy'])->name('todo.delete');




