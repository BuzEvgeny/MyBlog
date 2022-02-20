<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArtRequest;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{
    public function showAll()
    {
        if(Auth::check()){
            $id = Auth::id();
        }
        $objArticle = new Article();
        $articles = $objArticle->where('user_id','LIKE',$id)->orderBy('id','desc')->paginate(10);
        $authors = $objArticle->groupBy('author')->get('author');
        return view('private', [
            'articles' => $articles,
            'authors'  => $authors
        ]);
    }

    public function getArticle(int $id)
    {
        $authors = Article::distinct()->get('author');
        return view('user.one_article',[
            'article'=> Article::findOrFail($id),
            'authors'  => $authors
            ]);
    }

    public function addArticle()
    {
        $authors = Article::distinct()->get('author');
        return view('User/add',['authors'  => $authors]);
    }

    public function createArticle( ArtRequest $request)
    {
        $author = $request->input('author');
        $title = $request->input('title');
        $category = $request->input('category');
        $short_text = $request->input('short_text');
        $full_text = $request->input('full_text');
        $user_id = $request->input('user_id');

        $objArticle = (new Article())->create([
            'author'     => $author,
            'title'      => $title,
            'category'   => $category,
            'short_text' => $short_text,
            'full_text'  => $full_text,
            'user_id'    => $user_id
        ]);
        if ($objArticle){
            return Redirect(route('user.show_all'));
        }
        return back();
    }

    public function updateArticle($id)
    {
        $objArticle = Article::find($id);
        $authors = Article::distinct()->get('author');
        if (!$objArticle){
            return abort(404);
        }
        return view('user.edit', [
            'article' => $objArticle,
            'authors'  => $authors
            ]);
    }

    public function editArticle( ArtRequest $request)
    {
        $objArticle = Article::findOrFail($request->input('article_id'));
        $objArticle -> update($request->all());
        if ($objArticle->save()){
            return redirect(route('user.get_article',['id'=> $objArticle->id]))
                ->with('success', 'Article successfully updated');
        }
        return back()->with('error', 'Failed to update article');
    }

    public function deleteArticle($id)
    {
        $objArticle = Article::findOrFail($id);
        if ($objArticle->delete()){
            return redirect(route('user.show_all'))->with('success', 'Article delete');
        }
        return back()->with('error', 'Article not deleted');
    }
}
