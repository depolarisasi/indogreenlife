<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemporaryController extends Controller
{
    public function marketing(){
        return view('marketing');
    }
    public function finance(){
        return view('finance');
    }
    public function warehouse(){
        return view('warehouse');
    }
    public function product(){
        return view('product');
    }
    public function design(){
        return view('design');
    }
    public function regulator(){
        return view('regulator');
    }
    public function production(){
        return view('production');
    }
}
