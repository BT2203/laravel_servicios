<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }

    protected $fillable = [
        'nombre',
        'precio',
        'marca_id'
    ];

}
