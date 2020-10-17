@if(session()->has('mesaj'))
    <div class="conteiner">
        <div class="alert alert-{{session('mesaj_tur')}}">{{session('mesaj')}}</div>
    </div>
@endif
