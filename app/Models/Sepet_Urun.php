<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sepet_Urun extends Model
{
    use SoftDeletes;
    protected $table='sepet_uruns';
    protected $guarded = [];
}
