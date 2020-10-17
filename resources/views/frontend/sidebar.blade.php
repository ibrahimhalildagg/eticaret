<div class="col-md-3">
    <div class="panel panel-default">
        <div class="panel-heading">Kategoriler</div>
        <div class="list-group categories">
            @if(count($categorys)==0)
                Bu kategoride henüz ürün bulunmamaktadır.
            @endif
            @foreach($categorys as $category)
            <a href="{{route('kategori',$category->slug)}}" class="list-group-item"><i class="fa fa-arrow-circle-o-right"></i> {{$category->name}}</a>
            @endforeach

        </div>
    </div>
</div>
