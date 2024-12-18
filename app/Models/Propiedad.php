<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\galeria;
use Illuminate\Support\Carbon;
class Propiedad extends Model
{
    use HasFactory;
    protected $fillable=['titulo','tipo','operacion' ,'forma_de_pago','metraje',  
    'habitaciones',       'baños',        'cocheras',    'descripcion_detallada',
    'fotos', 'video','nombre_contacto','telefono_contacto','email_contacto','publicada'];
    protected $table='propiedades';
 protected $with=['galerias'];
 public $timestamps = true;

 public function getCreatedAtAttribute($value)
{
  return Carbon::parse($value)->subHours(3)->format('d/m/Y H:i');
}

// Or for updated_at:

public function getUpdatedAtAttribute($value)
{
  return Carbon::parse($value)->subHours(3)->format('d/m/Y H:i');
}
    public function galerias(){
      return   $this->hasMany(galeria::class,'propiedad_id');
    }
    
}
