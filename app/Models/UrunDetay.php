<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UrunDetay extends Model
{
    public $timestamps=false;
    public function urun(){
        return $this->belongsTo('App\Models\Urun');
    }

}
