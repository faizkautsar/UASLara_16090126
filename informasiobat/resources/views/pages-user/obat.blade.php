@extends('user.welcome')
@section('content')

<div class="colorlib-intro">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <div class="intro">
              <h1>Obat </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
   
<div class="colorlib-blog">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
        <h2>Artikel Tentang Obat</h2>
        <p>Anda dapat menemukan disini beberapa jenis tentang obat sesuai anjuran dokter dan juga obat yang dilarang pemerintah</p>
      </div>
    </div>
    <div class="row">
     
      <div class="col-md-4 animate-box">
         @foreach ($obats as $obat)
        <article class="article-entry">
          <div class="admin">
            <p><span><i class="icon-user2"></i> by: Admin</span> <span><a href="#"><i class="icon-bubble3"></i> 1</a></span></p>
          </div>
          <div class="desc2">
            <h2><a href="{{route('obat.detail',$obat->slug)}}">{{$obat->namaobat}}</a></h2>
          </div>
          <a href="{{route('obat.detail',$obat->slug)}}" class="blog-img" style="background-image: url({{asset('images/'.$obat->gambar)}});"></a>
          <div class="desc">
            <!-- <p class="meta"><span class="day">{{$obat->created_at->format('D m')}}</p> -->
            <p>{{$obat->tentang}}</p>
          </div>
        </article>
        @endforeach
      </div>
      
    </div>
  </div>
</div>
@endsection