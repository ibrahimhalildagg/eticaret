@extends('frontend.master')
@section('content')
    <div id="commerce">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Anasayfa</a></li>
            @foreach($urun_detaylari->kategoriler as $kategori)
            <li><a href="{{route('kategori', $kategori->slug)}}">{{$kategori->name}}</a></li>
            @endforeach
            <li class="active">{{$urun_detaylari->baslik}}</li>
        </ol>
        <div class="bg-content">
            <div class="row">
                <div class="col-md-5">
                    <img src="http://via.placeholder.com/350/150?text=UrunResmi">
                    <hr>
                    <div class="row">
                        <div class="col-xs-3">
                            <a href="#" class="thumbnail"><img src="http://via.placeholder.com/60/60?text=UrunResmi"></a>
                        </div>
                        <div class="col-xs-3">
                            <a href="#" class="thumbnail"><img src="http://via.placeholder.com/60/60?text=UrunResmi"></a>
                        </div>
                        <div class="col-xs-3">
                            <a href="#" class="thumbnail"><img src="http://via.placeholder.com/60/60?text=UrunResmi"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <h1>{{$urun_detaylari->baslik}}</h1>
                    <p class="price" style="font-size: 24px;"><b>{{$urun_detaylari->fiyat}}</b> {{$urun_detaylari->parabirimi}}</p>
                    <p><a href="#" class="btn btn-theme">Sepete Ekle</a></p>
                </div>
            </div>

            <div>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#t1" data-toggle="tab">Ürün Açıklaması</a></li>
                    <li role="presentation"><a href="#t2" data-toggle="tab">Yorumlar</a></li>
                </ul>
                <div class="tab-content">
                    <br>
                    <div role="tabpanel" class="tab-pane active" id="t1">{{$urun_detaylari->aciklama}}</div>
                    <div role="tabpanel" class="tab-pane" id="t2">t2</div>
                </div>
            </div>

        </div>
    </div>

        <br>

@endsection
