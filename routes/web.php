<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SendMailController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\SettingProfileController;

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

Route::get('/',[PostController::class,'home']);
Route::get('/gallery',[PostController::class,'gallery']);


Route::get('/blog',[PostController::class,'index']);
Route::get('/blog/{post:slug}',[PostController::class,'show']);

Route::resource('/register',RegisterController::class,)->middleware('guest');

Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);

Route::resource('user', UserController::class);

Route::get('/dashboard',function(){
    return view ('dashboard.layouts.dashboard');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug',[DashboardPostController::class,'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::get('/admin/categories/checkSlug',[AdminCategoryController::class,'checkSlug'])->middleware('admin');
Route::resource('/admin/categories', AdminCategoryController::class)->except('show')->middleware('admin');

Route::resource('setting/profile',SettingProfileController::class);

Route::post('/', [SendMailController::class,'send'])->name('contact.send');




