<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\CategoriaController;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        date_default_timezone_set('America/Mexico_City');
        $posts = Post::all()->where('activo', 1);
        $categorias = Categoria::all()->where('activo', 1);
        $users = User::all();
        return view('blog', compact('posts', 'users', 'categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        date_default_timezone_set('America/Mexico_City');
        $categorias = Categoria::all()->where('activo', 1);

        return view('posts.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        date_default_timezone_set('America/Mexico_City');
        //dd($request->all());
        $catContrl = new CategoriaController();
        $cat_id = $request->input('categoria_id');

        $articulo_cover = 'NoFile.png';
        if($auth = auth()->user()){
            $request->validate([
                'title' => 'required|string|max:255',
                'content' => 'required|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'categoria_id' => 'required|exists:categorias,id',
            ]);

        $ruta = '/archivos/';
        $carpeta_categoria = $catContrl->show($cat_id)[0]->categoria;
//dd($ruta.$carpeta_categoria);
        if(!is_dir($ruta.$carpeta_categoria)){
            mkdir($ruta.$carpeta_categoria, 0777, true);
        }

        if ($request->file('image') != null)
        {
            $request->validate([
                'file' => 'mimes:png,jpg,jpeg|max:512'
            ]);
            $originalName = $request->file('image')->getClientOriginalName();
            $name = date('Ymd').date('His').'_'.$originalName;

            //dd($name, $ruta.$carpeta_categoria.'/'. $name);
            $request->image->move(public_path().$ruta.$carpeta_categoria.'/', $name);
        }


 /*             $imagePath = null;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $name = $file->getClientOriginalName();
                $originalName = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $name = date('Ymd').date('His').'_'.$name;

                $imagePath = Storage::putFileAs('public/images', $name, 'public');
                //$imagePath = $request->file('image')->storeAs('images', $name, 'public');
                //$path = Storage::url($imagePath);

                dd($imagePath);
            }
  */
            $post = new Post();
            $post->user_id = $auth->id;
            $post->titulo = $request->input('title');
            $post->contenido = $request->input('content');
            $post->imagen = $ruta.$carpeta_categoria.'/'.$name ?? null;
            $post->nombre_imagen = $originalName ?? null;
            $post->categoria_id = $request->input('categoria_id');
            $post->activo = 1;
            $post->save();

            return redirect()->route('blog')->with('success', 'Post creado exitosamente.');
        } else {
            return redirect()->route('login')->with('error', 'Debes iniciar sesión para crear un post.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($post_id)
    {
        Post::where('id', $post_id)->update(['activo' => 0]);
        return redirect()->route('blog')->with('success', 'Post eliminado exitosamente.');
    }
}
