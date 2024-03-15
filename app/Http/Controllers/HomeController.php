<?php

namespace App\Http\Controllers;

use App\Events\Testing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function call(){
        Session::flash('success','Called Toaster');
        event(new Testing);
        echo "called";
    }
    public function callsee(){
        Session::flash('success','Called Toaster');
        echo "called";
    }
}
