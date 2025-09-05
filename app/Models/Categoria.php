<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categorias';

    public $primaryKey = 'id';
    protected $fillable = [
        'id', 
        'categoria',
        'activo',
        'updated_at'
    ];

    protected $perPage = 20;


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function post()
    {
        return $this->hasOne('App\Models\Post', 'id', 'categoria_id');
    }
}