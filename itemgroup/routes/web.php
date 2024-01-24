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
// Homepage -- 
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/',[ItemsController::class,'Showitemsgroup'])->name('Showitemsgroup');
Route::get('/ShowProd/{id}',[ItemsController::class,'ShowProd'])->name('ShowProd');
Route::get('/Addtocart/{id}',[ItemsController::class,'Addtocart'])->name('Addtocart');
Route::get('/checkout',[ItemsController::class,'checkout'])->name('checkout');





    // ################# ROUTE IN GROUP DASHBORAD ################

Route::get('/dispayItems',[ItemsController::class,'DispayItems'])->name('dispayItems')->middleware('auth');  
Route::get('/addgritem',[ItemsController::class ,'DisplayAddItemsgroup'])->name('DisplayAddg')->middleware('auth');
Route::post('save-group-dash',[ItemsController::class ,'SaveGroupsItemsdashborad'])->name('save-group-dash')->middleware('auth');
Route::get('/deletegroupdash/{x}',[ItemsController::class ,'deleteGroupItemdash'])->name('deletegroupdash')->middleware('auth');
    // ################# ROUTE IN GROUP DASHBORAD ################
Route::get('/additem',[ItemsController::class ,'DisplayAddItems'])->name('DisplayAdd')->middleware('auth');
Route::post('save-items-dash',[ItemsController::class ,'SaveItemsdashborad'])->name('save-items-dash')->middleware('auth');
Route::get('/deletedash/{x}',[ItemsController::class ,'deleteItemdash'])->name('deleteitemdash')->middleware('auth');
Route::get('/logout',[ItemsController::class ,'logout'])->name('logout');

  // ################# ROUTE IN HOMEPAGE GROUPNAME ################
Route::get('/itemgroup',[ItemsController::class ,'GetItemGroup'])->name('itemgroup');
Route::post('save-group',[ItemsController::class ,'SaveGroupsItems'])->name('save-group');
Route::get('/deletegroup/{x}',[ItemsController::class ,'deleteGroupItem'])->name('deletegroup');
Route::get('/editgroupitem/{x}',[ItemsController::class ,'editGroupItem'])->name('editgroup');
Route::post('/updateGroup',[ItemsController::class ,'UpdateGroupName'])->name('updateGroup');

  // ################# ROUTE IN HOMEPAGE ITEMS ################

Route::get('/items',[ItemsController::class ,'GetItems'])->name('items');
Route::post('save-items',[ItemsController::class ,'SaveItems'])->name('save-items');
Route::get('/deleteitems/{y}',[ItemsController::class ,'deleteItem'])->name('deleteitems');
Route::get('/edititem/{x}',[ItemsController::class ,'editItem'])->name('edititem');
Route::post('/updateitem',[ItemsController::class ,'UpdateName'])->name('updateitem');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
