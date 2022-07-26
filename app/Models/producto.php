<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /* muchos a muchos */
    public function ventas()
    {
        return $this->belongsToMany(Venta::class, 'venta_id');
    }

    public function compras()
    {
        return $this->hasMany(Compra::class, 'compra_id');
    }

    /* uno a muchos inversa */
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    
}
