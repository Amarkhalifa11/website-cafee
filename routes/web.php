<?php

use App\Models\categories;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\User;

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
    return view('admin');
});

Route::get('/about', function () {
    $categories = categories::all();
    return view('about' , compact('categories'));
})->name('about');


Route::get('/all_posts', function () {
    return view('posts');
})->name('all_posts');

// ________________________________________________________________________

use App\Http\Controllers\CategoriesController;
 
Route::get('/', [CategoriesController::class, 'index']);
Route::get('/category', [CategoriesController::class, 'category'])->name('category');
Route::get('/category/create', [CategoriesController::class, 'create'])->name('category.create');
Route::post('/category/store', [CategoriesController::class, 'store'])->name('category.store');
Route::get('/category/edit/{id}', [CategoriesController::class, 'edit'])->name('category.edit');
Route::post('/category/update/{id}', [CategoriesController::class, 'update'])->name('category.update');
Route::get('/category/destroy/{id}', [CategoriesController::class, 'destroy'])->name('category.destroy');

// ________________________________________________________________________

use App\Http\Controllers\backendController;
 
Route::get('/logout', [backendController::class, 'logout'])->name('logout');

// ________________________________________________________________________

use App\Http\Controllers\PostsController;
 
Route::get('/all_posts', [PostsController::class, 'index'])->name('all_posts');
Route::get('/all_posts/{category}', [PostsController::class, 'category'])->name('all_posts.category');
Route::get('/', [PostsController::class, 'random'])->name('random');
Route::get('/single/{id}', [PostsController::class, 'single'])->name('single');


Route::get('/bac_all_posts', [PostsController::class, 'all_posts'])->name('bac_all_posts');
Route::get('/bac_all_posts/create', [PostsController::class, 'create'])->name('bac_all_posts.create');
Route::post('/bac_all_posts/store', [PostsController::class, 'store'])->name('bac_all_posts.store');
Route::get('/bac_all_posts/edit/{id}', [PostsController::class, 'edit'])->name('bac_all_posts.edit');
Route::post('/bac_all_posts/update/{id}', [PostsController::class, 'update'])->name('bac_all_posts.update');
Route::get('/bac_all_posts/destroy/{id}', [PostsController::class, 'destroy'])->name('bac_all_posts.destroy');

// ________________________________________________________________________

use App\Http\Controllers\ComentsController;

Route::post('/add_coment', [ComentsController::class, 'add_coment'])->name('add_coment');

// ________________________________________________________________________

use App\Http\Controllers\UserController;

Route::get('/all_users', [UserController::class, 'all_users'])->name('all_users');

// ________________________________________________________________________

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.index');
    });
});
