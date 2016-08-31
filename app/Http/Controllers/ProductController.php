<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProductController extends Controller
{
    public function listProducts() {
        return view('products.list');
    }

    public function single() {
        return view('products.single');
    }

    public function edit() {
        return view('products.edit');
    }

    public function add() {
        return view('products.add');
    }

    public function listTypes(){
        return view('products.listTypes');
    }
}
