<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;

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

/*
|--------------------------------------------------------------------------
| Register, Login and Logout
|--------------------------------------------------------------------------
*/

// Route::prefix('register') -> group(function () {
//     Route::get('/', [UserController::class, 'registerView']);
//     Route::post('/', [UserController::class, 'register']);
// });
Route::prefix('login')->middleware('guest')->group(function () {
    Route::get('/', [UserController::class, 'loginView'])->name('login');
    Route::post('/', [UserController::class, 'authenticate']);
});
Route::get('logout', [UserController::class, 'logout'])->middleware('auth');


/*
|--------------------------------------------------------------------------
| Admin Resource
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard']);

    Route::prefix('banner')->group(function () {
        Route::get('/', [AdminController::class, 'bannerDashboard'])->name('banner');
        Route::post('/', [AdminController::class, 'addBanner']);
        Route::get('/{banner}', [AdminController::class, 'deleteBanner']);
    });

    Route::prefix('organisasi')->group(function () {
        Route::get('/', [AdminController::class, 'organisasiDashboard'])->name('organisasi');
        Route::post('/', [AdminController::class, 'addOrganisasi']);
        Route::get('/{organisasi}', [AdminController::class, 'deleteOrganisasi']);
    });

    Route::prefix('artikel')->group(function () {
        Route::get('/', [AdminController::class, 'artikelDashboard'])->name('artikel');
        Route::post('/', [AdminController::class, 'addArtikel']);
        Route::get('/{id}', [AdminController::class, 'deleteArtikel']);
    });
});


/*
|--------------------------------------------------------------------------
| General Resource
|--------------------------------------------------------------------------
*/
Route::get('/home', function () {
    return redirect('/');
});
Route::get('/', [PageController::class, 'home']);
Route::get('/Profil', [PageController::class, 'profile']);
Route::get('/Organisasi', [PageController::class, 'organisasi']);
Route::get('/Berita', [PageController::class, 'berita']);
// Route::get('/Proyek-riset', [PageController::class, 'proyekRiset']);
// Route::get('/Kegiatan', [PageController::class, 'kegiatan']);
// Route::get('/Produk', [PageController::class, 'produk']);
Route::get('/{id}/{tipe}', [PageController::class, 'baca']);
Route::get('/Kontak', [PageController::class, 'kontak']);
Route::get('/AI-NOVAC', [PageController::class, 'ainovac']);

// Route::get('/linkstorage', function () {
//     Artisan::call('storage:link');
// });