@extends('frontend.master')
@section('content')
    <body id="commerce">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{route('anasayfa')}}">Anasayfa</a></li>
            <li class="active">{{$kategori->name}}</li>
        </ol>

        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$kategori->name}}</div>
                    <div class="panel-body">

                        <div class="list-group categories">
                            @if(count($altKategoriler)==0)
                            {{$kategori->name}} kategorisine ait alt kategori bulunmamaktadır.
                            @endif
                            @foreach($altKategoriler as $altKategori)
                            <a href="" class="list-group-item"><i class="fa fa-arrow-circle-o-right"></i> {{$altKategori->name}}</a>
                            @endforeach

                        </div>
                        <h3>Fiyat Aralığı</h3>
                        <form>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> 100-200
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> 200-300
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="products bg-content">
                    Sırala
                    <a href="#" class="btn btn-default">Çok Satanlar</a>
                    <a href="#" class="btn btn-default">Yeni Ürünler</a>
                    <hr>
                    <div class="row">
                        @if(count($urunler)==0)
                          <div class="col-md-12">  Bu kategoriye ait urun bulunmamaktadır.</div>
                        @endif
                        @foreach($urunler as $urun)
                            <div class="col-md-3 product">
                                <a href="{{route('urun',$urun->slug)}}"><img src="http://lorempixel.com/400/400/food/1"></a>
                                <p><a href="{{route('urun',$urun->slug)}}">{{$urun->baslik}})</a></p>
                                <p class="price">{{$urun->fiyat}}</p>
                                <p><a href="#" class="btn btn-theme">Sepete Ekle</a></p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

@endsection
