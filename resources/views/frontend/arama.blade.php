@extends('frontend.master')
@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{route('anasayfa')}}">Anasayfa</a></li>
            <li class="active">Arama Sonucu</li>
        </ol>
        <div class="products">
            <div class="panel panel-theme">
                <div class="panel-body">
                    <div class="row">
                        @if(count($urunler)==0)
                            <div class="col-md-12">
                                Bir ürün bulunamadı!
                            </div>
                        @endif
                        @foreach($urunler as $urun)
                            <div class="col-md-3 product">
                                <a href="{{route('urun',$urun->slug)}}">
                                    <img src="http://lorempixel.com/400/400/food/1" alt="{{$urun->baslik}}" >
                                </a>
                                <p>
                                    <a href="{{route('urun',$urun->slug)}}">
                                        {{$urun->baslik}}
                                    </a>
                                </p>
                                <p class="price">{{$urun->fiyati}}{{$urun->para_birimi}}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{$urunler->appends([ 'aranan' => old('aranan')])->links()}}
            </div>
        </div>
    </div>
@endsection
