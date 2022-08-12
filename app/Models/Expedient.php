<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Expedient
 *
 * @property $id
 * @property $codigo
 * @property $descripcion
 * @property $procedemiento
 * @property $organismo
 * @property $empleado
 * @property $archivo
 * @property $tipo
 * @property $fase
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Expedient extends Model
{
    
    static $rules = [
		'codigo' => 'required',
		'descripcion' => 'required',
		'procedemiento' => 'required',
		'organismo' => 'required',
		'empleado' => 'required',
		'archivo' => 'required',
		'tipo' => 'required',
		'fase' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','descripcion','procedemiento','organismo','empleado','archivo','tipo','fase'];



}
