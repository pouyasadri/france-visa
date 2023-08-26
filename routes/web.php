<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

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

Route::get("/", [\App\Http\Controllers\IndexController::class, "index"]);
Route::prefix("cities")->group(function () {
    Route::view("/", "cities");
    Route::view("/paris", "city.paris");
    Route::view("/strasbourg", "city.strasbourg");
    Route::view("/nice", "city.nice");
    Route::view("/toulouse", "city.toulouse");
    Route::view("/lyon", "city.lyon");
});
Route::prefix("/universities")->group(function () {
    Route::view("/", "universities");
    Route::view("/paris-sud-university", "university.paris_sud");
    Route::view("/sorbonne-paris-nord", "university.sorbonne_paris_nord");
    Route::view("/paris-7", "university.paris_7");
    Route::view("paris-4-sorbonne", "university.paris_4");
    Route::view("/paris-3", "university.paris_3");
    Route::view("/paris-2", "university.paris_2");
    Route::view("/lyon-3", "university.lyon_3");
    Route::view("/lyon-2", "university.lyon_2");
    Route::view("/lyon-1", "university.lyon_1");
    Route::view("/pantheon-sorbonne", "university.pantheon");
    Route::view("/cote-d-azure", "university.nice");
    Route::view("/toulouse", "university.toulouse");
    Route::view("/strasbourg", "university.strasbourg");
});
Route::prefix('/blog')->group(function () {
    // Display the blog creation form
    Route::get('/admin', [BlogController::class, 'create']);

    // Store a newly created blog
    Route::post('/admin', [BlogController::class, 'store']);

    // Delete a specific blog
    Route::get('/{blog}/delete', [BlogController::class, 'destroy'])->name('blog.delete');

    // Display all blogs
    Route::get('/', [BlogController::class, 'index']);

    // Display a specific blog
    Route::get('/{blog}', [BlogController::class, 'show'])->name('blog.show');
})->whereNumber('blog'); // Ensure the parameter is a number and bind to Blog instance
Route::prefix("/consult")->group(function () {
    Route::view("/", "consult");
});
Route::view("/aboutUs", "about");
Route::view("/contactUs", "contact");
