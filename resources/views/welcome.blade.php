@extends('layouts.app')
@section('content')

{{-- <h1>WELCOME</h1> --}}

<style>
    /* Customize styles as needed */

body {
    font-family: Arial, sans-serif;
}

.hero-section-1 {
    text-align: center;
    padding: 100px 0;
}

.hero-section-2 {
    text-align: center;
    padding-top: 600px;
}

.hero-section-3 {
    text-align: center;
    padding-top: 600px;
}
.link-text
{
    font-size: 1rem;
    padding-left:15px;
}

</style>


<style>
    /* Large desktop or widescreen */
    @media screen and (min-width: 1440px) {
        body
        {            
            background-image: url('{{ asset('landscape-photos/1.png') }}');
            background-size: cover;
            background-repeat: no-repeat;
            position: center;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
        .header__menu
        {
            background-color: transparent !important;
        }
        .hero-section-2
        {
            background-image: url('{{ asset('landscape-photos/2.png') }}');
            background-size: cover;
            background-repeat: no-repeat;
            position: center;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;

        }
        .hero-section-3
        {
            background-image: url('{{ asset('landscape-photos/3.png') }}');
            background-size: cover;
            background-repeat: no-repeat;
            position: center;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
    }

    /* Mobile-specific styles */
    @media screen and (max-width: 768px) {
        .hero-section-1 {
            background-image: url('{{ asset('portrait-photos/1.jpg') }}');
            background-size: cover;
            background-position: center;
            background-size: cover;
            background-position: center;
            height: 100vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1rem;
        }
        .hero-section-2 {
            background-image: url('{{ asset('portrait-photos/2.jpg') }}');
            background-size: cover;
            background-position: center;
            background-size: cover;
            background-position: center;
            height: 100vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1rem;
        }
        .hero-section-3 {
            background-image: url('{{ asset('portrait-photos/3.jpg') }}');
            background-size: cover;
            background-position: center;
            background-size: cover;
            background-position: center;
            height: 100vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1rem;
        }

        /* 
        public/portrait-photos/1 2.jpg 
        public/portrait-photos/1 3.jpg 
        public/portrait-photos/1.jpg */

        .links {
            font-size: 1.5rem;
        }
    }


</style>


    <main class="hero-section-1">
        <div style="margin-top:20%;"></div>
        <div class="hero-content">
            <h3 style="color: white !important;">DIANA DRESS</h3>
            {{-- <a href="#" class="btn btn-primary btn-lg" style="color: white !important;">Shop the Collection</a> --}}
            <a class="link-text" href="#" class="btn-lg" style="color: white !important;">Shop the Collection</a>
            <a class="link-text" href="#" class="btn-lg" style="color: white !important;">Purchase Diana Dress</a>
        </div>
    </main>

    <main class="hero-section-2">
        <div style="margin-top:1%;"></div>
        <div class="hero-content">
            <h3 style="color: white !important;">TALIA ONE SET</h3>
            {{-- <a href="#" class="btn btn-primary btn-lg" style="color: white !important;">Shop the Collection</a> --}}
            <a class="link-text" href="#" class="btn-lg" style="color: white !important;">Shop the Collection</a>
            <a class="link-text" href="#" class="btn-lg" style="color: white !important;">Purchase Talia One Set</a>
        </div>
    </main>

    <main class="hero-section-3">
        <div style="margin-top:0.001%;"></div>
        <div class="hero-content">
            <h3 style="color: white !important;">IVY JEANS</h3>
            {{-- <a href="#" class="btn btn-primary btn-lg" style="color: white !important;">Shop the Collection</a> --}}
            <a class="link-text" href="#" class="btn-lg" style="color: white !important;">Shop the Collection</a>
            <a class="link-text" href="#" class="btn-lg" style="color: white !important;">Purchase Ivy Jeans</a>
        </div>
    </main>






@endsection