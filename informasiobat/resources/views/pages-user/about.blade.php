@extends('user.welcome')
@section('content')
<div class="colorlib-intro">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <div class="intro">
                            <h1>About Us</h1>
                            <p><span><a href="{{route('user.home')}}">Home</a></span> / <span>About</span></p>
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
                            <h2>About SIO</h2>
                            <p>Sistem Informasi Obat(SIO) Merupakan sebuah aplikasi tentang informasi obat-obatan yang ada di apotek atau sesuai anjuran dokter. Aplikasi ini di buat untuk mempermudah user dalam menemukan informasi tentang obat dan dapat mengatahui kandungan dosis yang ada pada obat-obatan tersebut</p>
                            <p>Admin menginformasikan berdasarkan pendapat dari dokter akhli</p>
                        </div>
                    </div>
                    
                    </div>
                </div>
               
               
            </div>
        </div>

        @endsection