<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', [App\Http\Controllers\WebController::class, 'index']);
Route::get('/about' ,[App\Http\Controllers\WebController::class, 'page']);
Route::get('/contact' ,[App\Http\Controllers\WebController::class, 'page']);
Route::get('/gallery' , [App\Http\Controllers\WebController::class, 'page']);
Route::get('/blog' ,[App\Http\Controllers\WebController::class, 'page']);
Route::get('/detail' ,[App\Http\Controllers\WebController::class, 'page']);
Route::get('/blog/{slug}' ,[App\Http\Controllers\WebController::class, 'page']);
Route::get('/sendmessage' ,[App\Http\Controllers\WebController::class, 'contactUs'])->name('sendmessage');
Route::get('/{any}' ,[App\Http\Controllers\WebController::class, 'page']);

// Route::resource('admin/contact', ContactController::class);





Route::prefix('admin')->group(function(){

    Route::get('/home', [App\Http\Controllers\Admin\HomeController::class,'index']);
    //cara routing pertama
    Route::resource('category', App\Http\Controllers\Admin\CategoryController::class);

    //cara routing kedua
    // Route::get('category/create',App\Http\Controllers\CategoryController::class, 'create')->name('category.create');


    Route::resource('contact', App\Http\Controllers\Admin\ContactController::class);
    // Route::resource('contact', [HomeController::class, 'contact']);

    // Featured Place Route manual satu satu ngambil fungsi di controler
    Route::get('featured/featuredplace', [App\Http\Controllers\Admin\FeaturedPlaceController::class, 'index']);
    Route::get('featured/addfeaturedplace', [App\Http\Controllers\Admin\FeaturedPlaceController::class, 'addfeaturedplace'])->name('addfeaturedplace');
    Route::post('featured/insertdatafeatured', [App\Http\Controllers\Admin\FeaturedPlaceController::class, 'insertdatafeatured'])->name('featured.store');
    Route::get('featured/tampildatafeatured/{id}', [App\Http\Controllers\Admin\FeaturedPlaceController::class, 'tampildatafeatured'])->name('tampildatafeatured');
    Route::post('featured/updatedatafeatured/{id}', [App\Http\Controllers\Admin\FeaturedPlaceController::class, 'updatedatafeatured'])->name('updatedatafeatured');
    Route::delete('featured/featuredplace/{id}', [App\Http\Controllers\Admin\FeaturedPlaceController::class, 'destroy'])->name('admin.destroy');

    // Category Route otomatis ngambil semua fungsi di controler


    //Recent Blog Route
    Route::resource('recentblog', App\Http\Controllers\Admin\RecentBlogController::class);

    // Route::resource('contact', ContactController::class);

    //Galerry Route
    Route::resource('galerry', App\Http\Controllers\Admin\GalerryController::class);

    //Destiny Route
    Route::resource('destiny', App\Http\Controllers\Admin\DestinyController::class);

    //Aboutme Route
    Route::resource('aboutme', App\Http\Controllers\Admin\AboutMeController::class);

    //Contact Us Route
    Route::resource('contactus', App\Http\Controllers\Admin\ContactUsController::class);


});
