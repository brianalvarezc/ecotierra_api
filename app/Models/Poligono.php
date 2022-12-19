<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poligono extends Model
{
    use HasFactory;
    
    private $id = null;
    private $puntos = "";
    private $created = "";
}
