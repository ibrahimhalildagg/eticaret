<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class KullaniciOturumController extends Controller
{
    public function index(){
        return view('kullanici.giris_yap');
    }


    public function login(request $request){
        if(
        auth()->attempt(['email'=>request('email'), 'password'=>request('password')],request()->has('benihatirla'))){
            request()->session()->regenerate();
            return redirect()->intended('/');
        }else {
            $errors = ['email' => 'Bilgilerinizle uyuşan kayıt bulunamadı.'];
            return back()->withErrors($errors);
        }
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('anasayfa');
    }

    public function aktiflestir($anahtar){
        $kullanici=User::where('aktivasyon_kodu', $anahtar)->first();
        if(!is_null($kullanici)){
            $kullanici->aktivasyon_kodu = null ;
            $kullanici->aktifmi = 1;
            $kullanici->save();
            return redirect()->route('anasayfa')
                ->with('mesaj','Kullanıcı kaydınız aktifleştirildi.')
                ->with('mesaj_tur','success');
        }else{
            return redirect()->route('anasayfa')
                ->with('mesaj','Kullanıcı kaydınız aktifleştirilemedi.')
                ->with('mesaj_tur','warning');
        }
    }
}
