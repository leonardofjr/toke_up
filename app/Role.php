<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    
    protected $fillable = [
        'user_id', 'role_id'
    ];

    public function users() {
        return $this->belongsToMany('App\User', 'id');
    }
}
