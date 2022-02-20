<?php

namespace App\Http\Controllers;

use App\Models\Article;


class ArticlesController extends Controller
{
    public function index()
    {
        $objArticle = new Article();
        $articles = $objArticle->orderBy('id','desc')->paginate(10);
        $authors = $objArticle->groupBy('author')->get('author');

        return view('index',[
            'articles' => $articles,
            'authors'  => $authors
        ] );
    }
    public function world()
    {
        $authors = Article::distinct()->get('author');
        $articles = Article::where('category','LIKE','world')->orderBy('id','desc')->paginate(10);
        return view('index',[
            'articles' => $articles,
            'authors'  => $authors
            ] );
    }
    public function design()
    {
        $authors = Article::distinct()->get('author');
        $articles = Article::where('category','LIKE','design')->orderBy('id','desc')->paginate(10);
        return view('index',[
            'articles' => $articles,
            'authors'  => $authors
            ] );
    }
    public function culture()
    {
        $authors = Article::distinct()->get('author');
        $articles = Article::where('category','LIKE','culture')->orderBy('id','desc')->paginate(10);
        return view('index',[
            'articles' => $articles,
            'authors'  => $authors
            ] );
    }
    public function science()
    {
        $authors = Article::distinct()->get('author');
        $articles = Article::where('category','LIKE','science')->orderBy('id','desc')->paginate(10);
        return view('index',[
            'articles' => $articles,
            'authors'  => $authors
            ] );
    }
    public function travel()
    {
        $authors = Article::distinct()->get('author');
        $articles = Article::where('category','LIKE','travel')->orderBy('id','desc')->paginate(10);
        return view('index',[
            'articles' => $articles,
            'authors'  => $authors
            ] );
    }

    public function showArticle(int $id)
    {
        $authors = Article::distinct()->get('author');
        $objArticle = Article::find($id);
        if (!$objArticle){
            return abort(404);
        }
        return view('show_article', [
            'article'  => $objArticle,
            'authors'  => $authors
        ]);

    }


    public function showUserArticles(string $author_articles)
    {
        $authors = Article::distinct()->get('author');
        $articles = Article::where('author',$author_articles)->orderBy('id','desc')->paginate(10);
        return view('index',[
            'articles' => $articles,
            'authors'  => $authors
            ] );
    }

}
