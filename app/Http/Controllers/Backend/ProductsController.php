<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function getDetail(){
        echo "Chi tiet san pham";
    }
    public function getList(){
        echo "Dsnh sach san pham";
    }
}
