<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;

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
    
    $posts = Post::take(8)->get();

    $posts = Post::orderBy('created_at', 'desc')->get();

        return view('home', [
            'posts' => $posts
        ]);
})->name('home');

Route::get('/categories', function () {
    
    $posts = Post::paginate(12);

    $posts = Post::orderBy('created_at', 'desc')->get();

        return view('categories', [
            'posts' => $posts
        ]);
})->name('categories');

Route::get('/deals', function () {
    return view('deals');
});

//Route::get('/trade', function () {
//   return view('items.create');
//});

Route::get('/about', function () {
    return view('about');
});

Route::get('/terms-and-conditions#privacy-policy', function () {
    return view('terms');
});

Route::get('/terms-and-conditions', function () {
    return view('terms');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('items', PostsController::class);

Route::get('/dashboard', [DashboardController::class, 'index'])
->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
