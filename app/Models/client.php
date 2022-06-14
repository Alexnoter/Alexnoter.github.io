<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /* uno a muchos */
    public function ventas()
    {
        return $this->hasMany(Venta::class, 'venta_id');
    }
}
