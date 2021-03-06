<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable =[

        'name',
        'description',
        'user_id'
    

    ];

    
    public function commments(){

        return $this->morphMany('App\Comment','commentable');
    }
    public function user()
    {

        return $this->belongsTo('App\User');
    }

    public function project(){

        return $this ->hasMany('App\Project');
    }
}
