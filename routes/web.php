<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'home'])->name('home.index');
Route::get('/news', [HomeController::class, 'news'])->name('home.news');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('home.gallery');
Route::get('/adhesion', [HomeController::class, 'adhesion'])->name('home.adhesion');
Route::get('/team', [HomeController::class, 'team'])->name('home.team');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/donation', [HomeController::class, 'donation'])->name('home.donation');

Route::get('/news/{title}-{id}', [HomeController::class, 'show'])->name('home.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
