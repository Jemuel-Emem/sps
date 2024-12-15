<?php

use App\Http\Middleware\admin;
use App\Http\Middleware\user;
use App\Http\Controllers\authlogout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
 Route::view('/', 'welcome')->name('welcome');
=======
// Route::view('/', 'login')->name('login');
>>>>>>> 968c971b630baea5aead13d36508fd53039bed05

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        if (Auth::user()->is_admin == 1) {
            return redirect()->route('Admindashboard');
        } else {
            return redirect()->route('user-dashboard');
        }
    })->name('dashboard');
});


Route::prefix('admin')->middleware(['auth', admin::class])->group(function () {
    Route::get('/Admindashboard', function () {
        return view('admin.index');
    })->name('Admindashboard');

    Route::get('/uploads', function () {
        return view('admin.upload');
    })->name('uploadss');



    Route::post('/logout', function () {
        Auth::logout();
        return redirect('/login');
    })->name('logouts');

});


Route::prefix('user')->middleware(['auth', user::class])->group(function () {
    Route::get('/dashboard', function () {
        return view('user.index');
    })->name('user-dashboard');

    Route::get('/appointment', function () {
        return view('user.appointment');
    })->name('appointment');

<<<<<<< HEAD
    Route::get('/status', function () {
        return view('user.status');
    })->name('statuss');
=======
    Route::get('/files', function () {
        return view('user.files');
    })->name('fil');

    Route::get('/upload', function () {
        return view('user.upload');
    })->name('uploads');
>>>>>>> 968c971b630baea5aead13d36508fd53039bed05


    Route::post('/logout', function () {
        Auth::logout();
        return redirect('/login');
    })->name('logout');

});


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


require __DIR__.'/auth.php';
