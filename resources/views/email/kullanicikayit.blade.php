<h1>{{config('app.name')}}</h1>
<p>Merhaba {{$kullanici->name}} Kaydınız başarılı bir şekilde gerçekleşmiştir.</p>
<p>Kaydınızı aktifleştirmek için <a href="{{config('app.url')}}/kullanici/aktiflestir/{{$kullanici->aktivasyon_kodu}}">tıklayınız </a>veya aşağıdaki linki tarayıcınızda çalıştırınız.</p>
<p>{{config('app.url')}}/kullanici/aktiflestir/{{$kullanici->aktivasyon_kodu}}</p>
