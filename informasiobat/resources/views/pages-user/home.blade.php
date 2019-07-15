@extends('user.welcome')
@section('content')

<div class="colorlib-intro">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <div class="intro">
              <h1>Selamat Datang</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <aside id="colorlib-hero">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="flexslider">
              <ul class="slides">
                <li style="background-image: url({{asset('lading/images/slade1.jpg')}});">
                  <div class="overlay"></div>
                </li>
                <li style="background-image: url({{asset('landing/images/slade2.jpg')}});">
                  <div class="overlay"></div>
                </li>
                <li style="background-image: url({{asset('landing/images/slade3.jpg')}});">
                  <div class="overlay"></div>
                </li>
                <li style="background-image: url({{asset('landing/images/img_bg_4.jpg')}});">
                  <div class="overlay"></div>
                </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
    </aside>

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
          <a href="#" class="blog-img" style="background-image: url({{asset('images/'.$obat->gambar)}});"></a>
          <div class="desc">
            <!-- <p class="meta"><span class="day">{{$obat->created_at->format('D m')}}</p> -->
            <p>{{str_limit($obat->tentang,20)}}</p>
          </div>
        </article>
        @endforeach
      </div>
      
    </div>
  </div>
</div>
@endsection
