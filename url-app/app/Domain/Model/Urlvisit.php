<?php

namespace App\Domain\Model;

use Illuminate\Database\Eloquent\Model;

class Urlvisit extends Model
{
    public function Url(){
        return $this->belongsTo("App\Domain\Model\Url");
    }
}
