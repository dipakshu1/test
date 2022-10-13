<?php


use App\Http\Controllers\UserManagement\permissionController;
use Illuminate\Support\Facades\Route;

Route::get('/usermanagement/permission',[permissionController::class,'index']);
Route::post('/usermanagement/permission',[permissionController::class,'addPermission']);
Route::get('/usermanagement/permission/delete/{id}',[permissionController::class,'delete']);
Route::get('/usermanagement/permission/edit/{id}',[permissionController::class,'edit']);
Route::post('/usermanagement/permission/update/{id}',[permissionController::class,'update']);
Route::get('/permission/data',[permissionController::class,'fetchData']);
Route::get('/permission/search',[permissionController::class,'searchData']);
Route::post('/usermanagement/permission/added',[permissionController::class,'addedPermission']);

?>