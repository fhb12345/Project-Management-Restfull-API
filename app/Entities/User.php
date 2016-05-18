<?php

namespace CodeProject\Entities;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function ownedProjects() {
        return $this->hasMany('CodeProject\Entities\Project', 'owner_id');
    }

    public function memberOfProjects()
    {
        return $this->belongsToMany('CodeProject\Entities\Project');
    }
}
