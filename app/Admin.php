<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{

    protected $hidden = [
        'created_at', 'updated_at',
    ];
    //
    //
    // use Notifiable;

    // protected $guard = 'Admin';

    // protected $fillable = [
    //     'name', 'email', 'password',
    // ];

    // protected $hidden = [
    //     'password', 'remember_token',
    // ];
    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
