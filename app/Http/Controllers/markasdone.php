<?php

namespace App\Http\Controllers;
use App\Models\todo_details;
use Illuminate\Http\Request;

class markasdone extends Controller
{
    public function update($id)
    {
        $todo = todo_details::findOrFail($id);
        $todo->isdone = true;
        $todo->save();
        return redirect('/getdata');
    }
}
