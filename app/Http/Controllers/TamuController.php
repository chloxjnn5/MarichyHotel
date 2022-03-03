<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;

class TamuController extends Controller
{
    public function tamu()
    {
        return view ('tamu.dashboard');
    }

}