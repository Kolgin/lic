<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ManagerController extends Controller
{
    public function listManagers(){
        return view('managers.list');
    }

    public function single(){
        return view('managers.single');
    }

    public function add(){
        return view('managers.add');
    }

    public function edit(){
        return view('managers.edit');
    }
}
