<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;

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

Route::get('/', function () {
    if(!Auth::check())
     return view('backend.pages.auth-login-2');
    else 
     return redirect()->route('home');

   
});
Route::middleware(['role:admin'])->group(function () {
    Route::get('/home', function () {
    return view('backend.pages.home');
})->middleware(['auth'])->name('home');

Route::get('/dashboard-sass', function () {
    return view('backend.pages.dashboard-sass');
})->middleware(['auth'])->name('dashboard-sass');
});

Route::middleware(['role:user'])->group(function () {
    


    Route::get('/home', function () {
        return view('backend.pages.home');
    })->middleware(['auth'])->name('home');

});



    










Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
