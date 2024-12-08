<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Prenda
 *
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $descripcion
 * @property $precio
 * @property $tiempo_uso
 * @property $user_id
 * @property $image
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Prenda extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion', 'precio', 'tiempo_uso', 'user_id', 'image', 'imageurl'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }
    

}
