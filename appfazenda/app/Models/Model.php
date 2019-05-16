<?php

namespace App\Models;

use App\Model\Usuario\Usuario;
use App\Scopes\InstalacaoScope;
use App\Scopes\IndSituacaoScope;
use App\Observers\ModelXbObserver;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model as ModelOri;
use \Illuminate\Database\Eloquent\Builder;
use App\Traits\SoftDeletes as SoftDeletes;



class Model extends ModelOri
{
    use Compoships;
    
    
}