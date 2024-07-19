<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesOrderController extends Controller
{
    public function index(){

        return view('sales-order.index');
    }

    public function show(){

        return view('sales-order.show');
    }
    public function showproduct(){

        return view('sales-order.show-product');
    }
    public function create(){

        return view('sales-order.new');
    }

    public function edit() {
        return view('sales-order.edit');
    }
}
