<?php

use App\Http\Controllers\Menu\MenuController;
use Illuminate\Support\Facades\Route;

Route::post('/setting/menu',[MenuController::class,'addMenu']);
Route::get('/setting/menu', [MenuController::class,'index']);
Route::get('/setting/menu/delete/{id}',[MenuController::class,'deleteMenu']);
Route::get('/setting/menu/edit/{id}',[MenuController::class,'editMenu']);
Route::post('/setting/menu/update/{id}',[MenuController::class,'update']);
?>