<?php

use App\Http\Controllers\Admin\MasterController as AdminMasterController;
use App\Http\Controllers\Admin\NewsCategoryController;
use App\Http\Controllers\Admin\NewsController;
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

                    Route::get('/', [NewsController::class, 'index'])->name('index');
                    Route::get('/create', [NewsController::class, 'create'])->name('create');
                    Route::post('/store', [NewsController::class, 'store'])->name('store');
                    Route::get('/edit/{id}', [NewsController::class, 'edit'])->name('edit');
                    Route::put('/update/{id}', [NewsController::class, 'update'])->name('update');
                    Route::delete('/destroy/{id}', [NewsController::class, 'destroy'])->name('destroy');
                    Route::get('/category/status-update/{id}', [NewsController::class, 'statusUpdate'])->name('status-update');
                    Route::get('/category/popularity-status-update/{id}', [NewsController::class, 'popularitystatusUpdate'])->name('popularity-status-update');
                });
            });
        });

        Route::get('/logout', [AdminMasterController::class, 'logout'])->name('admin.logout');
    });
});

// Route::get('/gen-pass', function () {
//     dd(Hash::make('24@journal.com'));
// });
