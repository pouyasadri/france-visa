<?php

use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ConsultController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\SitemapController;
use App\Http\Middleware\SetLocale;
use Illuminate\Http\Request;
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
            Route::get('/admin', [BlogController::class, 'create'])->middleware('auth');
            Route::post('/admin', [BlogController::class, 'store'])->middleware('auth');
            Route::get('/{blog}/delete', [BlogController::class, 'destroy'])->name('blog.delete')->middleware('auth');
            Route::get('/', [BlogController::class, 'index']);
            Route::get('/{blog}', [BlogController::class, 'show'])->name('blog.show');

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
        Route::prefix('house')->group(function () {
            Route::get('/admin', [HouseController::class, 'create'])->middleware('auth');
            Route::post('/admin', [HouseController::class, 'store'])->middleware('auth');
            Route::get('/{house}/delete', [HouseController::class, 'destroy'])->name('house.delete');
            Route::get('/', [HouseController::class, 'index']);
            Route::get('/{house}', [HouseController::class, 'show'])->name('house.show');
        });
        Route::get('/houses/filter', [HouseController::class, 'filter'])->name('houses.filter');

        // Other Routes
        Route::view('/consult', 'consult');
        Route::post('/consult/submit', [ConsultController::class, 'submit'])->name('consult.submit');
        Route::view('/contactUs', 'contact');

        // Auth routes localized
        \Auth::routes();
        Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
    });
