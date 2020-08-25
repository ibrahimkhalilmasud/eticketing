<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketTemplate extends Model
{

    public function tickets()
    {
        return $this->hasMany(TicketTemplate::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function scopeOpen($query, $id)
    {
        return $query->where('ticket_templates', $id);
    }
    //
    protected $fillable = ['template_title', 'template_body', 'template_attachment'];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

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
