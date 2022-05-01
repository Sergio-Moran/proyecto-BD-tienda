<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unidades_de_medidas extends Model
{
    use HasFactory;
    protected $table = 'unidades_de_medidas';
    protected $primarykey = "codigo";
}
