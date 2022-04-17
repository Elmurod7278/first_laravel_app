<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public  function showa($id)
    {$opp=$id;
       return view('show',compact('opp'));
    }
}

