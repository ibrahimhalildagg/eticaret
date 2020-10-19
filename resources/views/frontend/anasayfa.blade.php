@extends('frontend.master')
@section('content')

<div class="container">
    @include('email.alert')
    <div class="row">
        @include('frontend.sidebar')
        <div class="col-md-6">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @for($i=0; $i<count($urunler_slider); $i++)
                    <li data-target="#carousel-example-generic" data-slide-to="{{ $i }}" class="{{ $i == 0 ? 'active' : '' }}"></li>
                    @endfor
                </ol>
                <div class="carousel-inner" role="listbox">
                    @foreach($urunler_slider as $index => $urun)
                        <div class="item{{ $index == 0 ? 'active' : '' }}">
                            <img src="http://via.placeholder.com/650/400?text=UrunResmi" alt="...">
                            <div class="carousel-caption">
                                {{$urun->baslik}}
                            </div>
                        </div>
                    @endforeach
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default" id="sidebar-product">
                <div class="panel-heading">Günün Fırsatı</div>
                <div class="panel-body">
                    <a href="{{route('urun',$urun_gunun_firsati->slug)}}">
                        <img src="http://via.placeholder.com/400/485?text=UrunResmi" class="img-responsive">
                        {{$urun_gunun_firsati->baslik}}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="products">
        <div class="panel panel-theme">
            <div class="panel-heading">Öne Çıkan Ürünler</div>
            <div class="panel-body">
                <div class="row">
                    @foreach($urunler_one_cikan as $one_cikan)
                        <div class="col-md-3 product">
                            <a href="{{route('urun',$one_cikan->slug)}}"><img src="http://via.placeholder.com/400/400?text=UrunResmi"></a>
                            <p><a href="#">{{$one_cikan->baslik}}</a></p>
                            <p class="price">{{$one_cikan->fiyat}}{{$one_cikan->para_birimi}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="products">
        <div class="panel panel-theme">
            <div class="panel-heading">Çok Satan Ürünler</div>
            <div class="panel-body">
                <div class="row">
                    @foreach($urunler_cok_satan as $cok_satan)
                        <div class="col-md-3 product">
                            <a href="{{'urun', $cok_satan->slug}}"><img src="http://via.placeholder.com/400/400?text=UrunResmi"></a>
                            <p><a href="#">{{$cok_satan->baslik}}</a></p>
                            <p class="price">{{$cok_satan->fiyat}}{{$cok_satan->para_birimi}} </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="products">
        <div class="panel panel-theme">
            <div class="panel-heading">İndirimli Ürünler</div>
            <div class="panel-body">
                <div class="row">
                    @foreach($urunler_indirimli as $indirimli)
                        <div class="col-md-3 product">
                            <a href="{{route('urun',$indirimli->slug)}}"><img src="http://via.placeholder.com/400/400?text=UrunResmi"></a>
                            <p><a href="#">{{$indirimli->baslik}}</a></p>
                            <p class="price">{{$indirimli->fiyat}}{{$indirimli->para_birimi}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
