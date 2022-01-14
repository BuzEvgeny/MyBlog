<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $objArticle = new Article();
        $articles = $objArticle->orderBy('id','desc')->paginate(10);
        return view('index',['articles' => $articles] );
    }

    public function showArticle(int $id)
    {
        $objArticle = Article::find($id);
        if (!$objArticle){
            return abort(404);
        }
        return view('show_article', ['article' => $objArticle]);
    }

}
