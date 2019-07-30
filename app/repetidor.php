<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class repetidor extends Model
{
    //
    protected $table = 'repetidors';
    public $primaryKey = 'codi';
    public $timestamps = false;
}
