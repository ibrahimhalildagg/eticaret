<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Urun;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($slug){

        $kategori=Category::where('slug',$slug)->firstOrFail();
        $altKategoriler=Category::where('parent_id',$kategori->id)->get();
        $urunler=$kategori->urunler()->paginate(12);
        return view('frontend.kategori',compact('kategori','altKategoriler','urunler'));
    }
}
