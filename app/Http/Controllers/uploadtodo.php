<?php

namespace App\Http\Controllers;
use Validator;
use App\Models\todo_details;
use Illuminate\Http\Request;

class uploadtodo extends Controller
{
    public function submit(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'details' => 'required'
        ]);

        $todo_details = new todo_details();
        $todo_details->name = $request->input('name');
        $todo_details->details = $request->input('details');
        $todo_details->save();

        return redirect('/getdata');
    }
}
