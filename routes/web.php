<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandyController;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('candy', [CandyController::class, 'index'])->name('candy.home');
Route::get('candy/create', [CandyController::class, 'create'])->name('candy.create');
Route::post('candy/store', [CandyController::class, 'store'])->name('candy.store');
Route::get('candy/show/{candy}', [CandyController::class, 'show'])->name('candy.show');
Route::get('candy/edit/{candy}', [CandyController::class, 'edit'])->name('candy.edit');
Route::put('candy/update/{candy}', [CandyController::class, 'update'])->name('candy.update');
Route::delete('candy/destroy/{candy}', [CandyController::class, 'destroy'])->name('candy.destroy');
