<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Garage extends Model
{
    ___SOFT_DELETES_BLOCK___
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'location', 'capacity'
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
     * Get the Cars for the Garage.
     */
    public function cars()
    {
        return $this->belongsToMany(\App\Car::class);
    }

}