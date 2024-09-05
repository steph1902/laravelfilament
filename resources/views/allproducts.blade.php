@extends('layouts.app')
@section('content')


<style>
    .header__menu ul li a
    {
        color: black;
    }
</style>

<body>
    <div class="container justify-content-center">
        <div class="row mx-auto col-md-6 py-3 border-bottom d-flex justify-content-center align-items-center text-center" style="align-content: center;">
            <div class="col text-center">
                <img class="rounded-circle" src="{{asset('Outari web development/Asset foto produk/Dress/Bianca Dress/1.jpg')}}" alt="View all icon" height="50" width="50">
                <p class="mt-2">View all</p>
            </div>
            <div class="col text-center">
                <img class="rounded-circle" src="{{asset('Outari web development/Asset foto produk/Dress/Diana Dress/1.jpg')}}" alt="Maison Margiela" height="50" width="50">
                <p class="mt-2">Dress</p>
            </div>
            <div class="col text-center">
                <img class="rounded-circle" src="{{asset('Outari web development/Asset foto produk/One Set/Talia One Set /1.jpg')}}" alt="2024 Optical" height="50" width="50">
                <p class="mt-2">One Set</p>
            </div>
            <div class="col text-center">
                <img class="rounded-circle" src="{{asset('Outari web development/Asset foto produk/Pants/Ivy Jeans/1.jpg')}}" alt="Bestsellers" height="50" width="50">
                <p class="mt-2">Pants</p>
            </div>
            <div class="col text-center">
                <img class="rounded-circle" src="{{asset('Outari web development/Asset foto produk/Skirts/Celine Skirt/1.jpg')}}" alt="Metal" height="50" width="50">
                <p class="mt-2">Skirts</p>
            </div>
            <div class="col text-center">
                <img class="rounded-circle" src="{{asset('Outari web development/Asset foto produk/Tops/Amelia Top/1.jpg')}}" alt="Prescription" height="50" width="50">
                <p class="mt-2">Tops</p>
            </div>            
        </div>

        <div class="py-4">
            <small>Glasses / View all (25)</small>
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <i class="fas fa-th-large"></i>
                    <span class="ml-2">Quick View</span>
                    <i class="fas fa-filter ml-4"></i>
                    <span class="ml-2">Filter</span>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4">
                    <div class="card h-100 text-center">
                        <img class="card-img-top" src="image10.png" alt="Ego 01(B)" height="200">
                        <div class="card-body">
                            <h5 class="card-title">Ego 01(B)</h5>
                            <p class="card-text text-muted">USD$ 350</p>
                            <p class="text-muted">+4 Colors</p>
                        </div>
                        <div class="card-footer">
                            <i class="far fa-heart wishlist"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4">
                    <div class="card h-100 text-center">
                        <img class="card-img-top" src="image11.png" alt="Ego KC1" height="200">
                        <div class="card-body">
                            <h5 class="card-title">Ego KC1</h5>
                            <p class="card-text text-muted">USD$ 350</p>
                            <p class="text-muted">+4 Colors</p>
                        </div>
                        <div class="card-footer">
                            <i class="far fa-heart wishlist"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4">
                    <div class="card h-100 text-center">
                        <img class="card-img-top" src="image12.png" alt="Tap Tap KC3(GR)" height="200">
                        <div class="card-body">
                            <h5 class="card-title">Tap Tap KC3(GR)</h5>
                            <p class="card-text text-muted">USD$ 340</p>
                            <p class="text-muted">+4 Colors</p>
                        </div>
                        <div class="card-footer">
                            <i class="far fa-heart wishlist"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>


@endsection