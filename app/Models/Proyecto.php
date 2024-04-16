<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proyecto
 *
 * @property $id
 * @property $nombre_proyecto
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proyecto extends Model
{
    
    static $rules = [
		'nombre_proyecto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_proyecto'];

   /* public function bloque(){
      return $this->hasMany(proyecto::class, 'id'); unos a mucho

      public function rent() 
    {
        return $this->hasOne(Rent::class); uno a uno
    }

     public function roles() 
    {
        return $this- >belongsToMany(Role::class); varios a varios 
    }


    }
    */



}
