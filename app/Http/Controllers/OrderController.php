<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class OrderController extends Controller
{
    public function listOrders(){
        return view('orders.list');
    }

    public function single(){
        return view('orders.single');
    }

    public function add(){
        return view('orders.add');
    }
}
