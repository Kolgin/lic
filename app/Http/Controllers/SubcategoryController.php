<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SubcategoryController extends Controller
{
    public function listSubcategories(){
        return view('subcategories.list');
    }
}
