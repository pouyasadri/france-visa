<?php

use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ConsultController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\SitemapController;
use App\Http\Middleware\SetLocale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Redirect root to preferred or default locale for SEO-friendly canonical URLs
Route::get('/', function (Request $request) {
    $supported = ['en', 'fr', 'fa'];

    $sessionLocale = session('locale');
    $preferred = $request->getPreferredLanguage($supported);
    $locale = in_array($sessionLocale, $supported, true)
        ? $sessionLocale
        : ($preferred ?: config('app.locale'));

    if (! in_array($locale, $supported, true)) {
        $locale = config('app.locale');
    }

    return redirect("/{$locale}");
})->name('root.redirect');

// Keep sitemap at root (not locale-specific)
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

// Locale-prefixed routes
Route::prefix('{locale}')
    ->whereIn('locale', ['en', 'fr', 'fa'])
    ->middleware(SetLocale::class)
    ->group(function () {
        // Home Route (localized)
        Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('index');

        // Cities Routes
        Route::prefix('cities')->group(function () {
            Route::view('/', 'cities');
            $cities = ['paris', 'strasbourg', 'nice', 'toulouse', 'lyon'];
            foreach ($cities as $city) {
                Route::view("/{$city}", "city.{$city}");
            }
        });

        // Universities Routes
        Route::prefix('universities')->group(function () {
            Route::view('/', 'universities');
            $universities = [
                'paris-saclay-university', 'sorbonne-paris-nord', 'paris-cite', 'paris-4-sorbonne',
                'paris-3', 'paris-2', 'lyon-3', 'lyon-2', 'lyon-1', 'pantheon-sorbonne',
                'cote-d-azure', 'toulouse', 'strasbourg'
            ];
            foreach ($universities as $university) {
                Route::view("/{$university}", "university.{$university}");
            }
        });

        // Blog Routes
        Route::prefix('blog')->group(function () {
            Route::get('/', [BlogController::class, 'index'])->name('blog.index');
            Route::get('/create', [BlogController::class, 'create'])->middleware('auth')->name('blog.create');
            Route::post('/', [BlogController::class, 'store'])->middleware('auth')->name('blog.store');
            Route::post('/{id}/restore', [BlogController::class, 'restore'])->middleware('auth')->name('blog.restore');
            Route::get('/{blog}', [BlogController::class, 'show'])->name('blog.show');
            Route::get('/{blog}/edit', [BlogController::class, 'edit'])->middleware('auth')->name('blog.edit');
            Route::put('/{blog}', [BlogController::class, 'update'])->middleware('auth')->name('blog.update');
            Route::delete('/{blog}', [BlogController::class, 'destroy'])->name('blog.delete')->middleware('auth');

            // Category CRUD
            Route::prefix('/categories')->group(function () {
                Route::get('/', [BlogCategoryController::class, 'index'])->name('blog.categories.index');
                Route::get('/create', [BlogCategoryController::class, 'create'])->middleware('auth')->name('blog.categories.create');
                Route::post('/', [BlogCategoryController::class, 'store'])->middleware('auth')->name('blog.categories.store');
                Route::get('/{category}/edit', [BlogCategoryController::class, 'edit'])->middleware('auth')->name('blog.categories.edit');
                Route::put('/{category}', [BlogCategoryController::class, 'update'])->middleware('auth')->name('blog.categories.update');
                Route::delete('/{category}', [BlogCategoryController::class, 'destroy'])->middleware('auth')->name('blog.categories.delete');
            });
        });

        // Properties Routes
        Route::prefix('properties')->group(function () {
            Route::get('/', [\App\Http\Controllers\PropertyController::class, 'index'])->name('properties.index');
            Route::get('/create', [\App\Http\Controllers\PropertyController::class, 'create'])->middleware('auth')->name('properties.create');
            Route::post('/', [\App\Http\Controllers\PropertyController::class, 'store'])->middleware('auth')->name('properties.store');
            Route::post('/{id}/restore', [\App\Http\Controllers\PropertyController::class, 'restore'])->middleware('auth')->name('properties.restore');
            Route::delete('/images/{image}', [\App\Http\Controllers\PropertyController::class, 'deleteImage'])->middleware('auth')->name('properties.images.delete');
            Route::get('/{property}', [\App\Http\Controllers\PropertyController::class, 'show'])->name('properties.show');
            Route::get('/{property}/edit', [\App\Http\Controllers\PropertyController::class, 'edit'])->middleware('auth')->name('properties.edit');
            Route::put('/{property}', [\App\Http\Controllers\PropertyController::class, 'update'])->middleware('auth')->name('properties.update');
            Route::delete('/{property}', [\App\Http\Controllers\PropertyController::class, 'destroy'])->middleware('auth')->name('properties.destroy');
        });

        // Property front-end Routes (was property)
        Route::prefix('property')->group(function () {
            Route::get('/admin', [PropertyController::class, 'create'])->middleware('auth');
            Route::post('/admin', [PropertyController::class, 'store'])->middleware('auth');
            Route::get('/{property}/delete', [PropertyController::class, 'destroy'])->name('property.delete');
            Route::get('/', [PropertyController::class, 'index'])->name('property.index');
            Route::get('/{property}', [PropertyController::class, 'show'])->name('property.show');
        });
        Route::get('/property/filter', [PropertyController::class, 'filter'])->name('property.filter');

        // Other Routes
        Route::view('/consult', 'consult');
        Route::post('/consult/submit', [ConsultController::class, 'submit'])->name('consult.submit');
        Route::view('/contactUs', 'contact');

        // Auth routes localized
        Auth::routes();
        Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
    });
