<?php

use App\Http\Controllers\UserManagement\roleController;
use Illuminate\Support\Facades\Route;

Route::get('/usermanagement/roles',[roleController::class,'index']);
Route::get('/usermanagement/rolesview',[roleController::class,'viewRole']);

Route::get('/usermanagement/roles/edit/{id}',[roleController::class,'edit']);

Route::post('/usermanagement/roles/update/{id}',[roleController::class,'update']);
?>