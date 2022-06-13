<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    /* muchos a muchos */
    public function ventas()
    {
        return $this->belongsToMany(Venta::class, 'venta_id');
    }

    public function compras()
    {
        return $this->belongsToMany(Compra::class, 'compra_id');
    }

    public function etiquetas()
    {
        return $this->belongsToMany(Etiqueta::class, 'etiqueta_id');
    }

    /* uno a muchos inversa */
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    /* relacion uno a uno polimorfica */
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
