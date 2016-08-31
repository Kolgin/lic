<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MakerController extends Controller
{
    public function listMakers(){
        return view('makers.list');
    }

    public function single(){
        return view('makers.single');
    }

    public function add(){
        return view('makers.add');
    }

    public function edit(){
        return view('makers.edit');
    }
}
