<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/about', function () {
    return view('about');
});


// Route::get('/contact', function () {
//     return view('contact');
// });

Route::get('/contact', [ContactController::class,'index']);




Route::get('/detail', function () {
    return view('detail');
});



Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('Contact', ContactController::class);

Route::get('featuredplace', [App\Http\Controllers\FeaturedPlaceController::class, 'index']);
