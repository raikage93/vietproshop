<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcomeMor(){
        echo "Hello Morning";
    }
    public function welcomeAfter(){
        echo "Hello Afternoon";
    }
    public function welcomeEve(){
        echo "Hello Evening";
    }
}
