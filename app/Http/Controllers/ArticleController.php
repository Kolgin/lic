<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ArticleController extends Controller
{
    public function listArticles(){
        return view('articles.list');
    }

    public function single(){
        return view('articles.single');
    }

    public function listCategories(){
        return view('articles.categoriesList');
    }
}
