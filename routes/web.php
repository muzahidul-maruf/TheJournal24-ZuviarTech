<?php

use App\Http\Controllers\Admin\MasterController as AdminMasterController;
use App\Http\Controllers\Admin\NewsCategoryController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\NewsSubCategoryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Frontend\MasterController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });




Route::get('/', [MasterController::class, 'homePage'])->name('home-page');
Route::get('/news/{slug}', [MasterController::class, 'newsDetails'])->name('news-details');
Route::post('/store-feedback', [MasterController::class, 'store_feedback'])->name('store_feedback');

Route::get('/international-news', [MasterController::class, 'international_news'])->name('international_news');
Route::get('/sports-news', [MasterController::class, 'sports_news'])->name('sports_news');
Route::get('/entertainment-news', [MasterController::class, 'entertainment_news'])->name('entertainment_news');
Route::get('/feature-news', [MasterController::class, 'feature_news'])->name('feature_news');
Route::get('/desh-jure-news', [MasterController::class, 'desh_jure_news'])->name('desh_jure_news');
Route::get('/motamot-news', [MasterController::class, 'motamot_news'])->name('motamot_news');
Route::get('/others-news', [MasterController::class, 'others_news'])->name('others_news');




Route::get('/login', [AdminMasterController::class, 'loginPage'])->name('login-page');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::group(['middleware' => 'admin_auth_middleware'], function () {
    Route::group(['prefix' => '/admin'], function () {
        Route::get('/', [AdminMasterController::class, 'index'])->name('admin.dashboard');
        Route::get('/profile', [AdminMasterController::class, 'profile'])->name('admin.profile');
        Route::put('/profile-update', [AdminMasterController::class, 'profile_update'])->name('admin.profile-update');

        Route::name('admin.')->group(function () {
            Route::group(['prefix' => '/news'], function () {
                Route::name('news.')->group(function () {

                    Route::name('category.')->group(function () {
                        Route::group(['prefix' => '/category'], function () {
                            Route::get('/', [NewsCategoryController::class, 'index'])->name('index');
                            Route::get('/create', [NewsCategoryController::class, 'create'])->name('create');
                            Route::post('/store', [NewsCategoryController::class, 'store'])->name('store');
                            Route::get('/edit/{id}', [NewsCategoryController::class, 'edit'])->name('edit');
                            Route::put('/update/{id}', [NewsCategoryController::class, 'update'])->name('update');
                            Route::delete('/destroy/{id}', [NewsCategoryController::class, 'destroy'])->name('destroy');
                            Route::get('/category/status-update/{id}', [NewsCategoryController::class, 'statusUpdate'])->name('status-update');
                            Route::get('/category/popularity-status-update/{id}', [NewsCategoryController::class, 'popularitystatusUpdate'])->name('popularity-status-update');
                        });
                    });

                    Route::name('subcategory.')->group(function () {
                        Route::group(['prefix' => '/sub-category'], function () {
                            Route::get('/', [NewsSubCategoryController::class, 'index'])->name('index');
                            Route::get('/create', [NewsSubCategoryController::class, 'create'])->name('create');
                            Route::post('/store', [NewsSubCategoryController::class, 'store'])->name('store');
                            Route::get('/edit/{id}', [NewsSubCategoryController::class, 'edit'])->name('edit');
                            Route::put('/update/{id}', [NewsSubCategoryController::class, 'update'])->name('update');
                            Route::delete('/destroy/{id}', [NewsSubCategoryController::class, 'destroy'])->name('destroy');
                            Route::get('/status-update/{id}', [NewsSubCategoryController::class, 'statusUpdate'])->name('status-update');
                            Route::get('/popularity-status-update/{id}', [NewsSubCategoryController::class, 'popularitystatusUpdate'])->name('popularity-status-update');
                        });
                    });

                    Route::get('/', [NewsController::class, 'index'])->name('index');
                    Route::get('/create', [NewsController::class, 'create'])->name('create');
                    Route::post('/store', [NewsController::class, 'store'])->name('store');
                    Route::get('/edit/{id}', [NewsController::class, 'edit'])->name('edit');
                    Route::put('/update/{id}', [NewsController::class, 'update'])->name('update');
                    Route::delete('/destroy/{id}', [NewsController::class, 'destroy'])->name('destroy');
                    Route::get('/status-update/{id}', [NewsController::class, 'statusUpdate'])->name('status-update');
                    Route::get('/hero-status-update/{id}', [NewsController::class, 'herostatusUpdate'])->name('hero-status-update');

                    Route::get('/cat-wise-subcat/{cat_id}', [NewsController::class, 'cat_wise_subCat'])->name('cat_wise_subcat');
                });
            });
        });

        Route::get('/logout', [AdminMasterController::class, 'logout'])->name('admin.logout');
    });
});

// Route::get('/gen-pass', function () {
//     dd(Hash::make('24@journal.com'));
// });
