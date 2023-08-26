<?php

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
Route::prefix("/blog")->group(function () {
    Route::get("/admin", [\App\Http\Controllers\BlogController::class, 'create']);
    Route::post('/admin', [\App\Http\Controllers\BlogController::class, 'store']);
    Route::get("/{blog_id}/delete", [\App\Http\Controllers\BlogController::class, 'destroy']);
    Route::get("/", [\App\Http\Controllers\BlogController::class, 'index']);
    Route::get("/{blog_id}", [\App\Http\Controllers\BlogController::class, 'show']);
});
Route::prefix('/house')->group(function () {
    Route::get('/admin', [\App\Http\Controllers\HouseController::class, 'create']);
    Route::post('/admin', [\App\Http\Controllers\HouseController::class, 'store']);
    Route::get('/{house_id}/delete', [\App\Http\Controllers\HouseController::class, 'destroy']);
    Route::get('/', [\App\Http\Controllers\HouseController::class, 'index']);
    Route::get('/{house_id}', [\App\Http\Controllers\HouseController::class, 'show']);

});
Route::prefix("/consult")->group(function () {
    Route::view("/", "consult");
});
Route::view("/aboutUs", "about");
Route::view("/contactUs", "contact");
