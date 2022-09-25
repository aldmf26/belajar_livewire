<?php

use App\Http\Controllers\UserController;
use App\Http\Livewire\Article;
use Illuminate\Support\Facades\Route;

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

Route::get('/crud/{id}', [UserController::class, 'show'])->name('detail');
Route::get('/crud/{id}/edit', [UserController::class, 'edit'])->name('edit');

Route::get('/', function () {
    return view('tutorial');
});
Route::get('/crud', function () {
    return view('users.index');
})->name('crud');

Route::get('article/{name}', Article::class)->name('article');

// Route::get('/crud/{id}', [UserController::class, 'edit'])->name('edit');
// Route::get('/', function () {
//     return view('welcome');
// });
