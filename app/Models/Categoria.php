<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    /* uno a muchos */
    public function productos()
    {
        return $this->hasMany(Producto::class, 'producto_id');
    }
}
