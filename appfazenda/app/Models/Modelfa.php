<?php

namespace App\Models;

use App\Models\Model;
use App\Scopes\FazendaScope;




class Modelfa extends Model
{
    use Compoships;
    
    protected static function boot(){
        static::addGlobalScope(new FazendaScope);
    }
}