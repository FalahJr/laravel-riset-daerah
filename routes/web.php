<?php

use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PenelitianController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\RisetController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentQuizController;
use App\Http\Controllers\TopikRisetController;
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

// Route::redirect('/', '/login');
Route::get('/', [PublicController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);

Route::get('/riset', [PublicController::class, 'riset'])->name('riset');
// Route::post('/search-riset', [PublicController::class, 'searchRiset']);

Route::get('/topik-riset', [PublicController::class, 'topik_riset'])->name('topik-riset');
Route::get('/usulan-penelitian', [PublicController::class, 'usulan_penelitian'])->name('usulan-penelitian');
Route::get('/hasil-penelitian', [PublicController::class, 'hasil_penelitian'])->name('hasil-penelitian');
// Route::get('/', function () {
//     return view('welcome');
// });


// Dashboard
Route::get('/home', function () {
    return view('pages.dashboard', ['type_menu' => 'dashboard']);
});


// Login 

Route::get('/logout-action', [LoginController::class, 'logout_action']);



Route::post('/login-action', [LoginController::class, 'login_action']);

// masyarakat
Route::middleware(['authMasyarakat'])->prefix('masyarakat')->group(function () {

    Route::get('/home', [DashboardController::class, 'indexDashboardMurid'])->name('home');
    Route::resource('/penelitian', PenelitianController::class);
});

Route::middleware(['authAdmin'])->prefix('admin')->group(function () {
    Route::get('/home', [DashboardController::class, 'indexDashboardGuru'])->name('home');


    Route::resource('/riset', RisetController::class);
    Route::resource('/topik-riset', TopikRisetController::class);
    Route::resource('/usulan-penelitian', PenelitianController::class);
});

Route::middleware(['authPemerintahDaerah'])->prefix('pemerintah-daerah')->group(function () {
    Route::get('/home', [DashboardController::class, 'indexPemerintahDaerah'])->name('home');


    Route::resource('/riset', RisetController::class);
    Route::resource('/topik-riset', TopikRisetController::class);
});

// Layout
Route::get('/layout-default-layout', function () {
    return view('pages.layout-default-layout', ['type_menu' => 'layout']);
});

// Blank Page
Route::get('/blank-page', function () {
    return view('pages.blank-page', ['type_menu' => '']);
});
