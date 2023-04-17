<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Requests;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdviceController;
use App\Http\Controllers\AuthController;
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
    return view('opening');
});

// Konten Route
Route::get('/home', function () {
    return view('indexcov');
})->name('home');

// Pulau return view
Route::get('/home/pulau', function () {
    return view('pulau');
})->name('home.pulau'); 


// Login Route
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'loginPost')->name('login.post');
    Route::get('/logout', 'logout')->name('logout'); 
});
// Get advice from database route
// Route::get('/home/pulau', [AdviceController::class, 'index'])->name('home.saran');
// Read Saran
Route::get('/saran/history', [AdviceController::class, 'history'])->name('saran.history');
// Create Saran
Route::post('/saran', [AdviceController::class, 'store'])->name('saran.store');
// Halaman Update Saran
Route::get('/update-advice', function () {
    $advices = App\Models\Advice::all();
    return view('advice.update', compact('advices'));
})->name('update-advice');
// Form update saran
Route::get('/form-advice/{id}', function ($id) {
    $advice = App\Models\Advice::all();
    return view('advice.updateform', compact('advice', 'id'));
})->name('form-advice');
// Function update saran
Route::put('/update-advice/{id}', [AdviceController::class, 'update'])->name('update-advice-function');

// controller edit function
Route::get('/advices/{id}/edit', [AdviceController::class, 'update'])->name('advices.update');

// Delete Saran
Route::delete('/advices/{id}', [AdviceController::class, 'destroy'])->name('advices.destroy');

// Route to saran.blade.php
Route::get('/saran-template', function () {
    return view('saran');
})->name('saran');