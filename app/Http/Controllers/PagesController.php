<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home()
    {
        $userVisits = \Auth::user()->loginSession()->get()->toArray();

        return view('home')->with('visits', $userVisits);
    }
}
