<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\ConsultController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

// Home Route
Route::get("/", [\App\Http\Controllers\IndexController::class, "index"])->name('index');

// Cities Routes
Route::prefix("cities")->group(function () {
    Route::view("/", "cities"); // Display main cities page
    $cities = ['paris', 'strasbourg', 'nice', 'toulouse', 'lyon'];
    foreach ($cities as $city) {
        Route::view("/$city", "city.$city"); // Display individual city pages
    }
});

// Universities Routes
Route::prefix("universities")->group(function () {
    Route::view("/", "universities"); // Display main universities page
    $universities = [
        'paris-saclay-university', 'sorbonne-paris-nord', 'paris-cite', 'paris-4-sorbonne',
        'paris-3', 'paris-2', 'lyon-3', 'lyon-2', 'lyon-1', 'pantheon-sorbonne',
        'cote-d-azure', 'toulouse', 'strasbourg'
    ];
    foreach ($universities as $university) {
        Route::view("/$university", "university.$university"); // Display individual university pages
    }
});

// Blog Routes
Route::prefix('/blog')->group(function () {
    Route::get('/admin', [BlogController::class, 'create'])->middleware("auth"); // Display the blog creation form
    Route::post('/admin', [BlogController::class, 'store'])->middleware("auth"); // Store a newly created blog
    Route::get('/{blog}/delete', [BlogController::class, 'destroy'])->name('blog.delete')->middleware("auth"); // Delete a specific blog
    Route::get('/', [BlogController::class, 'index']); // Display all blogs
    Route::get('/{blog}', [BlogController::class, 'show'])->name('blog.show'); // Display a specific blog

    // Category CRUD
    Route::prefix('/categories')->group(function () {
        Route::get('/', [BlogCategoryController::class, 'index'])->name('blog.categories.index');
        Route::get('/admin', [BlogCategoryController::class, 'create'])->middleware('auth')->name('blog.categories.create');
        Route::post('/admin', [BlogCategoryController::class, 'store'])->middleware('auth')->name('blog.categories.store');
        Route::get('/{category}/edit', [BlogCategoryController::class, 'edit'])->middleware('auth')->name('blog.categories.edit');
        Route::put('/{category}', [BlogCategoryController::class, 'update'])->middleware('auth')->name('blog.categories.update');
        Route::get('/{category}/delete', [BlogCategoryController::class, 'destroy'])->middleware('auth')->name('blog.categories.delete');
    });
});

// Houses Routes
Route::prefix('/house')->group(function () {
    Route::get('/admin', [HouseController::class, 'create'])->middleware("auth");; // Display the blog creation form
    Route::post('/admin', [HouseController::class, 'store'])->middleware("auth");; // Store a newly created blog
    Route::get('/{house}/delete', [HouseController::class, 'destroy'])->name('house.delete'); // Delete a specific blog
    Route::get('/', [HouseController::class, 'index']); // Display all blogs
    Route::get('/{house}', [HouseController::class, 'show'])->name('house.show'); // Display a specific blog
});

// Other Routes
Route::view("/consult", "consult"); // Display consultation page
Route::post('/consult/submit', [ConsultController::class, 'submit'])->name('consult.submit');
Route::view("/contactUs", "contact"); // Display contactUs page

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/sitemap.xml', [App\Http\Controllers\SitemapController::class, 'index']);

Route::get('/houses/filter', [HouseController::class, 'filter']);
