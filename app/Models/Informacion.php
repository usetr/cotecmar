<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Informacion
 *
 * @property $id
 * @property $pieza
 * @property $peso_teorico
 * @property $peso_real
 * @property $estado
 * @property $proyecto
 * @property $bloque
 * @property $fecha_registrio
 * @property $registrado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Informacion extends Model
{
    
    static $rules = [
		'pieza' => 'required',
		'peso_teorico' => 'required',
		'peso_real' => 'required',
		'estado' => 'required',
		'proyecto' => 'required',
		'bloque' => 'required',
		'fecha_registrio' => 'required',
		'registrado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['pieza','peso_teorico','peso_real','estado','proyecto','bloque','fecha_registrio','registrado'];



}
