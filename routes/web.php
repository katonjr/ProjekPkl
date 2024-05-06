<?php
use App\Http\Controllers\FeaturedPlaceController;
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

// Featured Place Route

Route::get('featuredplace', [App\Http\Controllers\FeaturedPlaceController::class, 'index']);

Route::get('addfeaturedplace', [App\Http\Controllers\FeaturedPlaceController::class, 'addfeaturedplace'])->name('addfeaturedplace');

Route::post('insertdatafeatured', [App\Http\Controllers\FeaturedPlaceController::class, 'insertdatafeatured'])->name('insertdatafeatured');

Route::get('/tampildatafeatured/{id}', [App\Http\Controllers\FeaturedPlaceController::class, 'tampildatafeatured'])->name('tampildatafeatured');

Route::post('/updatedatafeatured/{id}', [App\Http\Controllers\FeaturedPlaceController::class, 'updatedatafeatured'])->name('updatedatafeatured');

Route::delete('/featuredplace/{id}', [App\Http\Controllers\FeaturedPlaceController::class, 'destroy'])->name('admin.destroy');


//

