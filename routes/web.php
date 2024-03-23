<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('home');
});
Route::get('/dashboard', function () {
    return view('dashboard', [
        "title" => "Beranda"
    ]);
})->middleware('auth');
Route::get('/tourism', function () {
    return view('tourism', [
        "title" => "Wisata"
    ]);
});
Route::get('/information', function () {
    return view('information', [
        "title" => "Informasi"
    ]);
});
Route::get('/service', function () {
    return view('service', [
        "title" => "Layanan"
    ]);
});
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
// Route::get('/news', [PostController::class, 'index']);

Route::resource('/news', PostController::class);

Route::post('/logout', function(Request $request) {

    Auth::logout();

    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');

});