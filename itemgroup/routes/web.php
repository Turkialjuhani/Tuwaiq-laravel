<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;

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
    return view('welcome');
})->name('welcome');

Route::get('/itemgroup',[ItemsController::class ,'GetItemGroup'])->name('itemgroup');
Route::post('save-group',[ItemsController::class ,'SaveGroupsItems'])->name('save-group');
Route::get('/items',[ItemsController::class ,'GetItems'])->name('items');
Route::post('save-items',[ItemsController::class ,'SaveItems'])->name('save-items');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
