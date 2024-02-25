<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('product.index');
    }

    public function babykid(){
        return view('product.babykid');
    }

    public function beautyhealth(){
        return view('product.beautyhealth');
    }

    public function foodBeverage(){
        return view('product.foodBeverage');
    }

    public function homecare(){
        return view('product.homecare');
    }
}
