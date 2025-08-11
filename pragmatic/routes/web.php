<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnviarCorreo;

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
    return view('index');
})->name('home');

Route::post('enviar-correo', function() {
    $datos = ([
        'name' => request()->name,
        'email' => request()->email,
        'subject' => request()->subject,
        'message' => request()->message,
    ]);
    //Mail::to('contacto@pragmaticconsultingmx.com.mx')->send(new EnviarCorreo);
    Mail::to('humberto.franco@pragmaticconsultingmx.com.mx')->send(new EnviarCorreo($datos));

    return  redirect()->route('home')->with('success', 'Correo enviado exitosamente.');

})->name('enviar-correo');