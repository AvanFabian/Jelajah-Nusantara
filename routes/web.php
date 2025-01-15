<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdviceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use App\Models\User;

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

// LandingPage Route
Route::get('/', function () {
    return view('landingPage');
});
// Debug Result advicecontroller@debug
Route::get('/debugging/konten', 'App\Http\Controllers\AdminController@debug')->name('debugging.konten');
// Custom 404 error page
Route::fallback(function () {
    return view('errors.404');
});

// Pulau Route
Route::get('/home/pulau', function () {
    return view('pulau');
})->name('home.pulau');

// Route to admin.index
Route::get('/index', function () {
    return view('admin.layout.index');
})->name('admin.index');


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
    Route::get('/getUsers', [AdminController::class, 'getUsers'])->name('admin.getUsers');
    // Route::middleware(['CekAdminLogin'])->group(function () {
        // Users data Route Controller
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        // Store New Card Content Data
        Route::post('/dashboardStore', [AdminController::class, 'store'])->name('admin.dashboard.store');
        // detailExplore Update Route Controller
        Route::put('/explore/detail-explore', [AdminController::class, 'update'])->name('explore.update-content');
        // detailExplore Delete Route Controller
        Route::delete('/explore/detail-explore', [AdminController::class, 'destroy'])->name('explore.delete-content');
        // Authorize users role to be admin Route Controller
        Route::post('/manageUsers', [AdminController::class, 'manageUsers'])->name('admin.manageUsers');
    // });
});


// Middleware For LoggedIn user & Admin
Route::middleware(['CekUserLogin'])->group(function () {
    // Explore konten Route
    Route::get('/home/explore', function () {
        return view('explore3');
    })->name('home.explore');

    // Pulau Kontent Route
    // Jawa
    Route::get('/home/explore/pulau/jawa', function () {
        $currentIsland = 'jawa';
        View::share('currentIsland', $currentIsland);
        return view('mainContent.PULAU.jawa');
    })->name('home.explore.jawa');
    // Sumatera
    Route::get('/home/explore/pulau/sumatera', function () {
        $currentIsland = 'sumatera';
        View::share('currentIsland', $currentIsland);
        return view('mainContent.PULAU.sumatera');
    })->name('home.explore.sumatera');
    // Kalimantan
    Route::get('/home/explore/pulau/kalimantan', function () {
        $currentIsland = 'kalimantan';
        View::share('currentIsland', $currentIsland);
        return view('mainContent.PULAU.kalimantan');
    })->name('home.explore.kalimantan');
    // Sulawesi
    Route::get('/home/explore/pulau/sulawesi', function () {
        $currentIsland = 'sulawesi';
        View::share('currentIsland', $currentIsland);
        return view('mainContent.PULAU.sulawesi');
    })->name('home.explore.sulawesi');
    // Bali
    Route::get('/home/explore/pulau/bali', function () {
        $currentIsland = 'bali';
        View::share('currentIsland', $currentIsland);
        return view('mainContent.PULAU.bali');
    })->name('home.explore.bali');
    // Papua
    Route::get('/home/explore/pulau/papua', function () {
        $currentIsland = 'papua';
        View::share('currentIsland', $currentIsland);
        return view('mainContent.PULAU.papua');
    })->name('home.explore.papua');
    // Display Content
    Route::get('/pulau/{island}/content/{content}', 'App\Http\Controllers\AdminController@showContent')->name('island.content.show');

    // Upload Profile Picture Route
    Route::post('/uploadProfilePicture', [AdminController::class, 'uploadProfilePicture'])->name('uploadProfilePicture');

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


    // Reset Password Route
    Route::get('/forgot-password', function () {
        return view('auth.forgot-password');
    })->name('password.request');

    Route::post('/forgot-password', function (Request $request) {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    })->name('password.email');

    Route::get('/reset-password/{token}', function (string $token) {
        return view('auth.reset-password', ['token' => $token]);
    })->name('password.reset');

    Route::post('/reset-password', function (Request $request) {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    })->name('password.update');
});