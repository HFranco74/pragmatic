<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnviarCorreo;
use App\Http\Controllers\UsuarioController;

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
    return view('index');
})->name('home');

Route::get('alt', function() {
    return view('index_alt');
})->name('alt');

Route::post('enviar-correo', function() {
    $datos = ([
        'name' => request()->name,
        'email' => request()->email,
        'subject' => request()->subject,
        'message' => request()->message,
    ]);

    Mail::to('contacto@pragmaticonsulting.com.mx')->send(new EnviarCorreo($datos));

    return  redirect()->route('home')->with('sent-message', 'Correo enviado exitosamente.');

})->name('enviar-correo');


Route::get('serv1', function() {
    return view('serv01');
})->name('serv1');

Route::get('serv2', function() {
    return view('serv02');
})->name('serv2');

Route::get('serv3', function() {
    return view('serv03');
})->name('serv3');

Route::get('serv4', function() {
    return view('serv04');
})->name('serv4');

Route::get('serv5', function() {
    return view('serv05');
})->name('serv5');

Route::get('serv6', function() {
    return view('serv06');
})->name('serv6');


Route::get('blog', function() {
    return view('blog');
})->name('blog');


Route::get('blog-details', function() {
    return view('blog-details');
})->name('blog-details');

Route::get('crear-usuario', [App\Http\Controllers\UsuarioController::class, 'create'])->name('crear-usuario');
Route::post('guardar-usuario', [App\Http\Controllers\UsuarioController::class, 'store'])->name('guardar-usuario');
Route::get('listar-usuarios', [App\Http\Controllers\UsuarioController::class, 'index'])->name('listar-usuarios');
Route::get('editar-usuario/{id}', [App\Http\Controllers\UsuarioController::class, 'edit'])->name('editar-usuario');
Route::put('actualizar-usuario/{id}', [App\Http\Controllers\UsuarioController::class, 'update'])->name('actualizar-usuario');
Route::delete('eliminar-usuario /{id}', [App\Http\Controllers\UsuarioController::class, 'destroy'])->name('eliminar-usuario');

Route::get('blog/create', [App\Http\Controllers\BlogController::class, 'create'])->name('blog.create');
Route::post('blog/store', [App\Http\Controllers\BlogController::class, 'store'])->name('blog.store');
Route::get('blog/{id}', [App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');
Route::get('blog/{id}/edit', [App\Http\Controllers\BlogController::class, 'edit'])->name('blog.edit');
Route::put('blog/{id}', [App\Http\Controllers\BlogController::class, 'update'])->name('blog.update');
Route::delete('blog/{id}', [App\Http\Controllers\BlogController::class, 'destroy'])->name('blog.destroy');
