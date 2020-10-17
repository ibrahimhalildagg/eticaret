<?php

namespace App\Http\Controllers;

use App\Mail\KullaniciKayitMail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class KullaniciController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kullanici.kaydol');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name'=>'required|min:5|max:50',
            'email'=>'required|email|unique:users',
            'password'=>'required|confirmed|min:5|max:15',

        ]);
        $kullanici=User::create([
            'name'              =>request('name'),
            'email'             =>request('email'),
            'email_verified_at' =>'',
            'password'          =>bcrypt( request('password')),
            'aktivasyon_kodu'   =>str::random(60),
            'aktifmi'           =>0,
            'roles'             =>0,
            'created_at'        =>now(),
            'updated_at'        =>now(),
        ]);
        Mail::to(request('email'))->send(new KullaniciKayitMail($kullanici));
        auth()->login($kullanici);
        return redirect()->route('anasayfa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
