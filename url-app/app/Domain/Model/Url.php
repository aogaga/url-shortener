<?php

namespace App\Domain\Model;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{

    protected $fillable = ['url', 'email', 'hashcode'];

    public function UrlVisits(){
        return $this->hasMany('App\Domain\Model\Urlvisit');
    }
}
