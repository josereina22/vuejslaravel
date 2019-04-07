<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //protected $table = 'categorias'; //en caso que la tabla tiene otro nombre diferente a categoria
    //protected $primariKey = 'id' //en caso que la clave primaria sea distinto a id
    protected $fillable = ['nombre', 'descripcion', 'condicion'];

    public function articulos()
    {
        return $this->hasMany('App\Articulos');
    }

}
