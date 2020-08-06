<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelAgenda extends Model
{
    //
    protected $table='agenda';

    public function relUser()
    {
        return $this->hasOne('App\User', 'id', 'id_user');
    }
}
