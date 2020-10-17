<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Urun extends Model
{
    public function kategoriler(){
        return $this->belongsToMany('App\Models\Category','kategori_uruns');
    }
    public function detay(){
        return $this->hasOne('App\Models\UrunDetay');
    }
}
