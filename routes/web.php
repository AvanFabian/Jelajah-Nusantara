<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Requests;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdviceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use app\Models\Advice;

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

// Begining Route
Route::get('/', function () {
    return view('indexcov');
});

// Register Route, // Login Route, // Logout Route
Route::view('/register', 'login.register');
Route::post('/registerSend', [RegisterController::class, 'register'])->name('registerPost');
Route::view('/login', 'login.login');
Route::post('/loginSend', [LoginController::class, 'authenticate'])->name('loginPost');
Route::post('/forgotPassword', [LoginController::class, 'forgotPassword'])->name('forgotPassword');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Admin Route
Route::prefix('admin')->group(function () {
    // Middleware Untuk Proteksi Route dari User Biasa atau Bukan Admin
    Route::middleware(['CekAdminLogin'])->group(function () {
        // Your admin routes go here
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        // Store New Card Content Data
        Route::post('/dashboardStore', [AdminController::class, 'store'])->name('admin.dashboard.store');
        // detailExplore Update Route Controller
        Route::put('/explore/detail-explore', [AdminController::class, 'update'])->name('explore.update-content');
        // detailExplore Delete Route Controller
        Route::delete('/explore/detail-explore', [AdminController::class, 'destroy'])->name('explore.delete-content');
        // Authorize users role to be admin Route Controller
        Route::post('/authorizeAdmin', [AdminController::class, 'authorizeAdmin'])->name('admin.authorizeAdmin');
        // Unauthorize admin role to be user Route Controller
        Route::post('/unauthorizeAdmin', [AdminController::class, 'unauthorizeAdmin'])->name('admin.unauthorizeAdmin');
    });
});

// Middleware Untuk Proteksi Route dari Visitor atau User Yang Belum Login
Route::middleware(['CekUserLogin'])->group(function () {
    // your protected routes go here
    // Explore konten Route
    Route::get('/home/explore', function () {
        return view('explore3');
    })->name('home.explore');

    // detailExplore Route
    Route::get('/explore/detail-explore', function () {
        $tarian = App\Models\CardsIsland::all();
        return view('detailExplore', compact('tarian'));
    })->name('explore.detail-explore');


    // JentTeam Route
    Route::get('/home/our-team', function () {
        return view('jentTeam');
    })->name('home.jentteam');

    // Create Saran
    Route::post('/saran', [AdviceController::class, 'store'])->name('saran.store');
    // Halaman Update Saran
    Route::get('/update-advice', function () {
        $advices = App\Models\Advice::all();
        return view('advice.update', compact('advices'));
    })->name('update-advice');

    // Update Saran Page
    Route::put('/update-advice/{id}', [AdviceController::class, 'update'])->name('update-advice-function');

    // Update Saran Function
    Route::get('/advices/{id}/edit', [AdviceController::class, 'update'])->name('advices.update');

    // Delete Saran
    Route::delete('/advices/{id}', [AdviceController::class, 'destroy'])->name('advices.destroy');
});

// Indexcov Route
Route::get('/home', function () {
    return view('indexcov');
});

// Pulau Route
Route::get('/home/pulau', function () {
    return view('pulau');
})->name('home.pulau');