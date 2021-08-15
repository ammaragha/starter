<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class landingController extends Controller
{
    function getIndex()
    {
        return view('front.landing');
    }
}
