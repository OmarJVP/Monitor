<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class siguiete_paciente extends Model
{
 	protected $fillable = ['id', 'paciente', 'expediente','consultorio','visita','estatus'];
}
?>