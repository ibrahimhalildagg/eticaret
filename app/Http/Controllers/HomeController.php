<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Urun;
use App\Models\UrunDetay;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $categorys=Category::where('parent_id','0')->get();
        $urunler_slider=Urun::select('uruns.*')
            ->join('urun_detays','urun_detays.urun_id','uruns.id')
            ->where('urun_detays.goster_slider',1)
            ->orderBy('updated_at','desc')
            ->take(5)->get();
        $urun_gunun_firsati=Urun::select('uruns.*')
            ->join('urun_detays','urun_detays.urun_id','uruns.id')
            ->where('urun_detays.goster_gunun_firsati',1)
            ->orderBy('updated_at','desc')
            ->first();
        $urunler_one_cikan=Urun::select('uruns.*')
            ->join('urun_detays','urun_detays.urun_id','uruns.id')
            ->where('urun_detays.goster_one_cikan',1)
            ->orderBy('updated_at','desc')
            ->take(4)->get();
        $urunler_cok_satan=Urun::select('uruns.*')
            ->join('urun_detays','urun_detays.urun_id','uruns.id')
            ->where('urun_detays.goster_cok_satan',1)
            ->orderBy('updated_at','desc')
            ->take(4)->get();
        $urunler_indirimli=Urun::select('uruns.*')
            ->join('urun_detays','urun_detays.urun_id','uruns.id')
            ->orderBy('updated_at','desc')
            ->take(4)->get();


        return view('frontend.anasayfa',compact('categorys', 'urunler_slider',
            'urun_gunun_firsati','urunler_one_cikan', 'urunler_cok_satan','urunler_indirimli'));
    }
}
