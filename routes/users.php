<?php

use App\Http\Controllers\UserManagement\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/usermanagement/users',[UsersController::class,'index']);
Route::get('/users/userview',[UsersController::class,'userDetails']);


?>