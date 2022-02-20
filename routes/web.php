<?php


use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\User\ArticlesController as ArtController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use TCG\Voyager\Voyager;



/** For guest */
Route::get('/', [ArticlesController::class,'index'])->name('index');
Route::get('/user_articles/{author_articles}', [ArticlesController::class,'showUserArticles'])
    ->name('show_user_articles');
Route::get('/world', [ArticlesController::class,'world'])->name('world');
Route::get('/design', [ArticlesController::class,'design'])->name('design');
Route::get('/culture', [ArticlesController::class,'culture'])->name('culture');
Route::get('/science', [ArticlesController::class,'science'])->name('science');
Route::get('/travel', [ArticlesController::class,'travel'])->name('travel');
Route::get('/article/{id}', [ArticlesController::class, 'showArticle'])
    ->where('id','\d+')
    ->name('show_article');



Route::name('user.') ->group(function (){

    /** CRUD Articles */
    Route::get('/private/article/all', [ArtController::class,'showAll'])
        ->middleware('auth')
        ->name('show_all');
    Route::get('/private/article/all/one/{id}', [ArtController::class,'getArticle'])
        ->middleware('auth')
        ->name('get_article');
    Route::get('/private/article/add', [ArtController::class,'addArticle'])
        ->middleware('auth')
        ->name('add_article');
    Route::post('/private/article/create', [ArtController::class,'createArticle'])
        ->middleware('auth')
        ->name('create_article');
    Route::get('/private/article/update/{id}', [ArtController::class,'updateArticle'])
        ->middleware('auth')
        ->name('update_article');
    Route::post('/private/article/edit', [ArtController::class,'editArticle'])
        ->middleware('auth')
        ->name('edit_article');
    Route::get('/private/article/delete/{id}', [ArtController::class,'deleteArticle'])
        ->middleware('auth')
        ->name('delete_article');

    /** Authorization and registration */
    Route::get('/login', function (){
        if (Auth::check()){
            return redirect(route('user.show_all'));
        }
        return view('Auth.login');
    })->name('login');
    Route::post('/login',[LoginController::class,'login']);

    Route::get('/logout',function (){
        Auth::logout();
        return redirect('/');
    })->name('logout');

    Route::get('/registration', function (){
        if (Auth::check()){
            return redirect(route('user.show_all'));
        }
        return view('Auth.registration');
    })->name('registration');
    Route::post('/registration', [RegisterController::class, 'save']);

});

/** Admin  Voyager*/
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
