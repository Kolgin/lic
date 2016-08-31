<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CustomerController extends Controller
{
    public function listCustomers(){
        return view('customers.list');
    }

    public function single(){
        return view('customers.single');
    }

    public function add(){
        return view('customers.add');
    }

    public function edit(){
        return view('customers.edit');
    }
}
