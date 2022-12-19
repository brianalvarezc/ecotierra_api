<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Punto extends Model
{
    use HasFactory;

    private $id = null;
    private $latitud = "";
    private $longitud = "";
    private $created = "";

}
