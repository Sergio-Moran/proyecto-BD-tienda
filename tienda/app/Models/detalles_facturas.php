<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detalles_facturas extends Model
{
    use HasFactory;
    protected $table = 'detalles_facturas';
    protected $primarykey = "codigo";
}
