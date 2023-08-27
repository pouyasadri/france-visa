<?php

use App\Http\Controllers\BlogController;
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
        'paris-sud-university', 'sorbonne-paris-nord', 'paris-7', 'paris-4-sorbonne',
        'paris-3', 'paris-2', 'lyon-3', 'lyon-2', 'lyon-1', 'pantheon-sorbonne',
        'cote-d-azure', 'toulouse', 'strasbourg'
    ];
    foreach ($universities as $university) {
        Route::view("/$university", "university.$university"); // Display individual university pages
    }
});

// Blog Routes
Route::prefix('/blog')->group(function () {
    Route::get('/admin', [BlogController::class, 'create']); // Display the blog creation form
    Route::post('/admin', [BlogController::class, 'store']); // Store a newly created blog
    Route::get('/{blog}/delete', [BlogController::class, 'destroy'])->name('blog.delete'); // Delete a specific blog
    Route::get('/', [BlogController::class, 'index']); // Display all blogs
    Route::get('/{blog}', [BlogController::class, 'show'])->name('blog.show'); // Display a specific blog
})->whereNumber('blog'); // Ensure the parameter is a number and bind to Blog instance

// Other Routes
Route::view("/consult", "consult"); // Display consultation page
Route::view("/contactUs", "contact"); // Display contactUs page
