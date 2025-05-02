<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/register', function () {
    return view('pages.register');
});
Route::post('/login', function (Illuminate\Http\Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);
    $staticEmail = 'akun@gmail.com';
    $staticPassword = '123';
    if ($request->email === $staticEmail && $request->password === $staticPassword) {
        // Simulasi login berhasil
        session(['logged_in' => true, 'user_email' => $request->email]);
        return redirect('/')->with('success', 'Berhasil login!');
    } else {
        return back()->withErrors(['email' => 'Email atau password salah.'])->withInput();
    }
});
Route::get('/login', function () {
    return view('pages.login');
})->name('login');

Route::post('/logout', function (Request $request) {
    session()->forget(['logged_in', 'user_email']);
    return redirect('/login')->with('success', 'Berhasil logout!');
})->name('logout');

Route::post('/logout', function () {
    session()->flush(); // menghapus semua data sesi
    return redirect('/login');
})->name('logout');

Route::get('/create', function () {
    if (!session('logged_in')) {
        return redirect('/login');
    }
    return view('pages.create');
});

Route::get('/search', function () {
    return view('pages.search');
});

Route::get('/profile', function () {
    if (!session('logged_in')) {
        return redirect('/login');
    }
    return view('pages.profile');
});
Route::get('/searchresult', function () {
    return view('pages.searchresult');
});

Route::get('/recipe', function () {
    return view('pages.recipe');
});

Route::get('/collection', function () {
    if (!session('logged_in')) {
        return redirect('/login');
    }
    return view('pages.collection');
});
