<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class repetidors extends Model
{
    protected $table = 'repetidors';
    public $primaryKey = 'codi';
    public $timestamps = false;
}
