<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Pagi\PagiController;
use App\Http\Controllers\Products\ProductController;

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
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // });


    Route::get('getpro',[PagiController::class,'show']);

    Route::get('/createpro', function () {
        return view('createpro');
    });


    Route::get('/deletepro', function () {
        return view('deletepro');
    });

    Route::get('/updatepro', function () {
        return view('updatepro');
    });


});

require __DIR__.'/auth.php';


// Route::get('getpro',[PagiController::class,'show']);