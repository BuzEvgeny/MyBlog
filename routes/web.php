<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use TCG\Voyager\Voyager;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => 'guest'], function (){
    Route::get('/register', function(){
        return view('auth.registration');
    });
});




Route::view('/home','home')->name('home');


Route::name('user.') ->group(function (){
    Route::view('/private','private')->middleware('auth')->name('private');

    Route::get('/login', function (){
        if (Auth::check()){
            return redirect(route('user.private'));
        }
        return view('Auth.login');
    })->name('login');

     Route::post('/login',[LoginController::class,'login']);

    Route::get('/logout',function (){
        Auth::logout();
        return redirect('/home');
    })->name('logout');

    Route::get('/registration', function (){
        if (Auth::check()){
            return redirect(route('user.private'));
        }
        return view('Auth.registration');
    })->name('registration');
    Route::post('/registration', [RegisterController::class, 'save']);

});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
