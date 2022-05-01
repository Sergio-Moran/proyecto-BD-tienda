<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventario_productos extends Model
{
    use HasFactory;
    protected $table = 'inventario_productos';
    protected $primarykey = "codigo";
}
