<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class NewsController extends Controller
{
    public function listNews(){
        return view('news.list');
    }

    public function single(){
        return view('news.single');
    }

    public function add(){
        return view('news.add');
    }
}
