<?php

namespace App;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Person extends Authenticatable implements JWTSubject
{
    use Notifiable;

    // protected $fillable = ['first_name', 'last_name', 'email', 'password', 'title'];
    protected $guarded = [];
    // Rest omitted for brevity
    protected $hidden = ['password'];
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

    public function tasks() {
      return $this->hasMany('App\Task');
    }

    public function role() {
      return $this->belongsTo('App\Role');
    }

    public function department() {
      return $this->belongsTo('App\Department');
    }
}
