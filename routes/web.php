<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('anasayfa');
Route::get('/kategori/{slug}', 'CategoryController@index')->name('kategori');
Route::get('/urun/{slug}', 'UrunController@index')->name('urun');
Route::post('/ara', 'UrunController@ara')->name('ara');
Route::get('/ara', 'UrunController@ara')->name('ara');

Route::group(['middleware'=>'auth'], function(){
    Route::get('/sepet','SepetController@index')->name('sepet');
    Route::get('/odeme','OdemeController@index')->name('odeme');
    Route::get('/siparisler','SiparisController@index')->name('siparisler');
    Route::get('/siparisler/{id}', 'SiparisController@detay')->name('siparis');
});

Route::prefix('kullanici')->name('kullanici.')->group( function(){
    Route::get('/giris','KullaniciOturumController@index')->name('giris');
    Route::post('/login','KullaniciOturumController@login')->name('login');
    Route::get('/logout','KullaniciOturumController@logout')->name('logout');
    Route::resource('kaydol','KullaniciController');
    Route::get('aktiflestir/{anahtar}','KullaniciOturumController@aktiflestir')->name('aktiflestir');
});
Route::get('/test/mail', function(){
    $kullanici=\App\User::find(20);
    return new App\Mail\KullaniciKayitMail($kullanici);
});
