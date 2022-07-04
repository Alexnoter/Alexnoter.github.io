<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    /* protected $guarded = ['id', 'created_at', 'updated_at']; */
    protected $fillable = ['nombre', 'slug'];

    /* con esto decimos que nos tomara el slug y no el id para  que se vea mejor las rutas */
    public function getRouteKeyName()
    {
        return "slug";
    }


    /* uno a muchos */
    public function productos()
    {
        return $this->hasMany(Producto::class);
    }
}
