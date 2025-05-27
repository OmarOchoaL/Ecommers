<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CategoryController;


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
Route::get('/admin/profile',function(){return view('admin.profile');});
Route::get('/admin/insert',function(){return view('admin.insert');});
Route::get('/admin/crearusuario',function(){return view('admin.crearusuario');});
Route::get('/admin/conexion',function(){return view('admin.conexion');});
Route::get('/admin/verdatos',function(){return view('admin.verdatos');});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//
Route::get('/admin/verdatos', [UsersController::class, 'index'])->name('admin.verdatos');
Route::get('/admin/viewinghistory', [UsersController::class, 'index2'])->name('admin.viewinghistory');
Route::get('/admin/verdatos/{id}', [UsersController::class, 'edit'])->name('users.edit');
//insertar
Route::post('/insert-User', [UsersController::class, 'insertUser'])->name('insertUser.post');
Route::post('/insert-Peli', [UsersController::class, 'insertarPelicula'])->name('insertPeli.post');
Route::post('/insertar-Genero',[UsersController::class,'insertarGenero'])->name('insertarGenero.post');
//borrar
Route::delete('/admin/verdatos/{id}', [UsersController::class, 'destroy'])->name('admin.eliminarusuario');
Route::delete('/admin/movies/{id}', [UsersController::class, 'deleteMovie'])->name('admin.deleteMovie');
//Route::delete('/admin/categories/{id}', [CategoryController::class, 'destroy'])->name('admin.eliminarcategoria');
//Actualizar
Route::put('/admin/verdatos/{id}', [UsersController::class, 'update'])->name('users.update');
// Es de prueba despues borrar
//Route::get('/prueba-db', function () {
  //  return DB::table('migrations')->get();
//});
