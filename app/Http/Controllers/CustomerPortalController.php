<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerPortalController extends Controller
{
    public function login(){

        return view('customer-portal.login');
    }

    public function index(){

        return view('customer-portal.dashboard');
    }

    public function detailpo(){

        return view('customer-portal.detail-po');
    }
    public function detailso(){

        return view('customer-portal.detail-so');
    }

    public function edit() {
        return view('customer-portal.edit');
    }
}
