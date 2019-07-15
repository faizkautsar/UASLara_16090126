@extends('user.welcome')
@section('content')
<div class="colorlib-intro">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <div class="intro">
              <h1>Detail </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
<div id="colorlib-about">
			<div class="container">
				<div class="row row-pb-lg">
					<div class="col-md-6 animate-box">
						<div class="about-wrap">
							<h2>{{$obats->namaobat}}</h2>
							<p>{{$obats->tentang}}</p>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="video colorlib-video" style="background-image: url({{asset('images/'.$obats->gambar)}});">
							<a href="{{route('obat.detail',$obats->id)}}" ></a>
							<div class="overlay"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection