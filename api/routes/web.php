<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;


Route::get('/', function () {
    return view('welcome');
});
//grupo de rutas
Route::get('/admin',function(){return view('admin.index');});
Route::get('/send-email',[UsersController::class,'sendEmail']);
Route::get('/admin/movies',function(){return view('admin.movies');});
Route::get('/admin/series',function(){return view('admin.series');});
Route::get('/admin/viewinghistory',function(){return view('admin.viewinghistory');});
Route::get('/admin/configuration',function(){return view('admin.configuration');});





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
