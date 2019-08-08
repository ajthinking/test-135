<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    ___SOFT_DELETES_BLOCK___
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'brand', 'color', 'user_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        //
    ];

    /**
     * Get the User for the Car.
     */
    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }


    /**
     * Get the Garages for the Car.
     */
    public function garages()
    {
        return $this->belongsToMany(\App\Garage::class);
    }

}