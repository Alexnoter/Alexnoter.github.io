<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedore extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /* uno a muchos */
    public function compras()
    {
        return $this->hasMany(Compra::class, 'compra_id');
    }
}
