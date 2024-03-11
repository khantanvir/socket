<?php

namespace App\Http\Controllers;

use App\Events\Testing;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function call(){
        event(new Testing);
    }
}
