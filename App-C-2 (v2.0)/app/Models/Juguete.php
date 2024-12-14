<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Juguete
 *
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $descripcion
 * @property $precio
 * @property $tiempo_uso
 * @property $user_id
 * @property $user_name
 * @property $image
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Juguete extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion', 'precio', 'tiempo_uso', 'user_id', 'user_name', 'image'];



}
