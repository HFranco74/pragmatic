<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use App\Models\User;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    public $primaryKey = 'id';
    protected $fillable = [
        'id', 
        'user_id',
        'titulo', 
        'contenido',
        'imagen',
        'nombre_imagen',
        'categoria_id',
        'activo',
        'updated_at'
    ];

    protected $perPage = 20;


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }

    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'categoria_id');
    }
}
