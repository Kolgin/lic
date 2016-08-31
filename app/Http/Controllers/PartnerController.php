<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PartnerController extends Controller
{
    public function listPartners(){
        return view('partners.list');
    }

    public function single(){
        return view('partners.single');
    }

    public function add(){
        return view('partners.add');
    }

    public function edit(){
        return view('partners.edit');
    }

}
