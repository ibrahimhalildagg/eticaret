<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiparisController extends Controller
{
    public function index(){
        return view('kullanici.siparisler');
    }
    public function detay(){
        return view('kullanici.siparis_detay');
    }
}
