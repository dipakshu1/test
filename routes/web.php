<?php

use Illuminate\Support\Facades\Route;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
    $all_menus = Menu::get();
    return view('index',compact('all_menus'));
});

// Route::get('/',[MenuController::class,'home']);

Route::get('/demo13/dist/index.html', function () {
    $all_menus = Menu::get();

    return view('index',compact('all_menus'));
});
Route::get('/demo13/dist/dashboards/projects.html', function () {
    $all_menus = Menu::get();

    return view('projects',compact('all_menus'));
});
Route::get('demo13/dist/dashboards/ecommerce.html', function () {
    $all_menus = Menu::get();
    return view('ecommerce',compact('all_menus'));
});

Route::get('/demo13/dist/dashboards/online-courses.html', function () {
    $all_menus = Menu::get();

    return view('Online-Courses',compact('all_menus'));
});
Route::get('/demo13/dist/dashboards/marketing.html', function () {
    $all_menus = Menu::get();

    return view('Marketing',compact('all_menus'));
});

Route::get('/demo13/dist/apps/user-management/users/list.html', function () {
    $all_menus = Menu::get();

    return view('users/usersList',compact('all_menus'));
});
Route::get('/demo13/dist/authentication/layouts/corporate/sign-in.html', function () {
    $all_menus = Menu::get();

    return view('authentication/login',compact('all_menus'));
});
Route::get('/demo13/dist/apps/calendar.html', function () {
    $all_menus = Menu::get();
    return view('calendar',compact('all_menus'));
});

Route::get('/demo13/dist/apps/projects/activity.html', function () {
    $all_menus = Menu::get();
    return view('activities',compact('all_menus'));
});

Route::get('/setting/menu', function () {
    $all_menus = Menu::get();
    return view('menuList',compact('all_menus'));
});

// Route::get('usermanagement/rolesview', function () {
//     $all_menus = Menu::get();
//     return view('UserManagement.viewRole',compact('all_menus'));
// });
Route::get('/demo',function(){
    return view('dynamicTable');
});
Route::get('users/data',function(){
    $query = User::query();
    //where condition
    $total = $query->count();
    //perform sorting
    //code

    //perform pagination

    $query->offset(request('start'))->limit(request('length'));
    $data=$query->get();
    return[
        "draw"=>request('draw'),
        "recordsTotal"=>$total,
        "data"=>$data
    ];
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
