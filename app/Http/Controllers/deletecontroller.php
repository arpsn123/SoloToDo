<?php

namespace App\Http\Controllers;
use App\Models\todo_details;
use Illuminate\Http\Request;

class deletecontroller extends Controller
{
    public function destroy($id)
    {
                todo_details::findOrFail($id)->delete();
                return redirect('/getdata');
    }
}

