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


// Featured Place Route manual satu satu ngambil fungsi di controler

Route::get('featured/featuredplace', [App\Http\Controllers\FeaturedPlaceController::class, 'index']);

Route::get('featured/addfeaturedplace', [App\Http\Controllers\FeaturedPlaceController::class, 'addfeaturedplace'])->name('addfeaturedplace');

Route::post('featured/insertdatafeatured', [App\Http\Controllers\FeaturedPlaceController::class, 'insertdatafeatured'])->name('insertdatafeatured');

Route::get('featured/tampildatafeatured/{id}', [App\Http\Controllers\FeaturedPlaceController::class, 'tampildatafeatured'])->name('tampildatafeatured');

Route::post('featured/updatedatafeatured/{id}', [App\Http\Controllers\FeaturedPlaceController::class, 'updatedatafeatured'])->name('updatedatafeatured');

Route::delete('featured/featuredplace/{id}', [App\Http\Controllers\FeaturedPlaceController::class, 'destroy'])->name('admin.destroy');



// Category Route otomatis ngambil semua fungsi di controler

//cara routing pertama
Route::resource('category',App\Http\Controllers\CategoryController::class);

//cara routing kedua
// Route::get('category/create',App\Http\Controllers\CategoryController::class, 'create')->name('category.create');



//Recent Blog Route
Route::resource('recentblog',App\Http\Controllers\RecentBlogController::class);



