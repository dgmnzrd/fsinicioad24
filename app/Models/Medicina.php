<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicina extends Model
{
    use HasFactory;
    protected $table = 'medicinas';
    protected $primaryKey = 'MEDICINAS_ID';
    protected $fillable = [ 'nombre', 'clave', 'precio' ];
    public $timestamps = false ;
}
