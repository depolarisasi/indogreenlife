<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function index(){

        return view('sample.index');
    }

    public function show(){

        return view('sample.show');
    }
    public function create(){

        return view('sample.new');
    }

    public function edit() {
        return view('sample.edit');
    }
}
