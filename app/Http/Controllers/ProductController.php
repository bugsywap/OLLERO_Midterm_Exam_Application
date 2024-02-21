<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $gadget_array = array(

            "Iphone",
            "Samsung",
            "Huawei",
            "Oppo",
            "Google Pixel",
            "Nokia"
        );
        return view ('gadgets', ['gadget_array' => $gadget_array]);
    }
}
