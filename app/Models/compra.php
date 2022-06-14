<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Compra extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /* uno a muchos inverso */
    public function proveedore()
    {
        return $this->belongsTo(Proveedore::class, 'proveedore_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /* muchos a muchos */
    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'producto_id');
    }
}
