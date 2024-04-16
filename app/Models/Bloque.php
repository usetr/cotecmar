<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Bloque
 *
 * @property $id
 * @property $nombre_bloque
 * @property $proyecto
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Bloque extends Model
{
    
    static $rules = [
		'nombre_bloque' => 'required',
		'proyecto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_bloque','proyecto'];

    



}
