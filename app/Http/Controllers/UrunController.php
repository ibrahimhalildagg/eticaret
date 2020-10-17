<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Urun;
class UrunController extends Controller
{
    public function index($slug){
        $urun_detaylari=Urun::where('slug',$slug)->firstOrFail();
        return view('frontend.urun', compact('urun_detaylari'));
    }
    public function ara(){
        $aranan=request()->input('aranan');
        $urunler=Urun::where('baslik','like',"%$aranan%")
            ->orWhere('aciklama','like','%$aranan%')
            ->paginate(8);
        request()->flash();
        return view('frontend.arama',compact('urunler'));
    }
}
