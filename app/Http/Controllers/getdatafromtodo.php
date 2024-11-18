<?php

// namespace App\Http\Controllers;
// use App\Models\todo_details;
// use Illuminate\Http\Request;

// class getdatafromtodo extends Controller
// {
//     public function getdata()
//     {
//         $todo_data = todo_details::all();
//         dd ($todo_data);
//         // return view("show_data",["todo_data"=>$todo_data]);
//         return view('show_data',compact('todo_data'));
//     }
// }


namespace App\Http\Controllers;
use App\Models\todo_details;
use Illuminate\Http\Request;

class getdatafromtodo extends Controller
{
    public function getdata()
    {
        // Retrieve all todo data from the database
        $todo_data = todo_details::all();
        // Pass the data to the view
        return view('show_data', compact('todo_data'));
    }
}
