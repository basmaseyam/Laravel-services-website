<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
    return view('FrontEnd.index');
}

    function about(){
        return view('FrontEnd.about');
    }

    function servicest(){
        return view('FrontEnd.st-services');
    }

    function serviceibm(){
        return view('FrontEnd.ibm-service');
    }

    function contact(){
        return view('FrontEnd.contact');
    }
}
