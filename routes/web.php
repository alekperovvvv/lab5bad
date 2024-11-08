<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\HomeController;
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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [MessageController::class, 'index'])->name('message.index');
Route::get('/message/create', [MessageController::class, 'create'])->middleware('auth')->name('message.create');
Route::post('/message/store', [MessageController::class, 'store'])->middleware('auth')->name('message.store');
Route::get('/my-message', [MessageController::class, 'myMessage'])->middleware('auth')->name('message.my_message');
