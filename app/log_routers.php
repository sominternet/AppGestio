<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class log_routers extends Model
{
    protected $table = 'log_routers';
    public $primaryKey = 'id_log_routers';
    public $timestamps = false;
}
