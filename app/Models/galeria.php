<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galeria extends Model
{
    use HasFactory;
    protected $fillable=['imagen','propiedad_id'];
    protected $table='galeria';
    

}
