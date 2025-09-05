<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    static function show($id)
    {
        date_default_timezone_set('America/Mexico_City');
        $categoria = Categoria::find($id)->select('categoria')->where('activo', 1)->get();

        return $categoria;
    }
}
