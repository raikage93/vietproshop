<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getDetail(){
        echo "Chi tiet san pham";
    }
    public function getList(){
        echo "Dsnh sach san pham";
    }
}
