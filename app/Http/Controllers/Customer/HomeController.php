<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('customer.home.index');
    }

    public function show($id){
        return view('customer.home.show');
    }
}
