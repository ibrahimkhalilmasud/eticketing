<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketTemplate extends Model
{
    //
    protected $fillable = ['template_title', 'template_body', 'template_attachment'];

    // protected $fillable = ['username', 'password', 'phone_number', 'email'];
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
