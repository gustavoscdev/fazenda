<?php

namespace App\Models;

use App\Models\Model;
use App\Scope\FazendaScope;





class Modelfa extends Model
{
    public $timestamps = false;
    //use Compoships;    
    

    protected static function boot(){
        parent::boot();
        static::addGlobalScope(new FazendaScope);
    }
}