<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\P;
class MainController extends Controller
{
    //
    function index()
    {
        return view('p');
    }
}
