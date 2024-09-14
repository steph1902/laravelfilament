@extends('layouts.app')
@section('content')


<style>
    .header__menu ul li a
    {
        color: black;
    }
    .five-columns {
        flex: 0 0 20%;
        max-width: 20%;
        margin-bottom:20px;
    }
</style>

<body>
    <div class="container justify-content-center">
        <div class="row mx-auto col-md-6 py-3 border-bottom d-flex justify-content-center align-items-center text-center" style="align-content: center;">
            <div class="col text-center">
                <img class="rounded-circle category-button" category="all" src="{{asset('Outari web development/Asset foto produk/Dress/Bianca Dress/1.jpg')}}" alt="View all icon" height="50" width="50" style="object-fit: cover;">
                <p class="mt-2 category-button" category="all">View all</p>
            </div>
            <div class="col text-center">
                <img class="rounded-circle category-button" category="dress" src="{{asset('Outari web development/Asset foto produk/Dress/Diana Dress/1.jpg')}}" alt="Maison Margiela" height="50" width="50" style="object-fit: cover;">
                <p class="mt-2 category-button" category="dress">Dress</p>
            </div>
            <div class="col text-center">
                <img class="rounded-circle category-button" category="one-set" src="{{asset('Outari web development/Asset foto produk/One Set/Talia One Set /1.jpg')}}" alt="2024 Optical" height="50" width="50" style="object-fit: cover;">
                <p class="mt-2 category-button" category="one-set">One Set</p>
            </div>
            <div class="col text-center">
                <img class="rounded-circle category-button" category="pants" src="{{asset('Outari web development/Asset foto produk/Pants/Ivy Jeans/1.jpg')}}" alt="Bestsellers" height="50" width="50" style="object-fit: cover;">
                <p class="mt-2 category-button" category="pants">Pants</p>
            </div>
            <div class="col text-center">
                <img class="rounded-circle category-button" category="skirts" src="{{asset('Outari web development/Asset foto produk/Skirts/Celine Skirt/1.jpg')}}" alt="Metal" height="50" width="50" style="object-fit: cover;">
                <p class="mt-2 category-button" category="skirts">Skirts</p>
            </div>
            <div class="col text-center">
                <img class="rounded-circle category-button" category="tops" src="{{asset('Outari web development/Asset foto produk/Tops/Amelia Top/1.jpg')}}" alt="Prescription" height="50" width="50" style="object-fit: cover;">
                <p class="mt-2 category-button" category="tops">Tops</p>
            </div>            
        </div>

        <div class="py-4">
            <small>25 Products Available</small>
            <div class="d-flex justify-content-between align-items-center mb-4">
                {{-- <div>
                    <i class="fas fa-th-large"></i>
                    <span class="ml-2">Quick View</span>
                    <i class="fas fa-filter ml-4"></i>
                    <span class="ml-2">Filter</span>
                </div> --}}
            </div>

            <div class="row">
                @foreach ($products as $product)
                    @if (isset($product->product_image[0]))
                    <div class="col five-columns mb-20">
                        <div class="card h-100 border-0 product {{$product->category}}">
                            <a href="{{ route('product-details', $product->id) }}">
                                <img class="card-img-top img-fluid" src="{{ asset('storage/' . $product->product_image[0]) }}" alt="Ego 01(B)" style="max-height: 200px; object-fit: cover;">
                            </a>
                            <!-- rest of the code -->    
                            
                            
                            <div class="card-body">
                                <h5 class="card-title">{{$product->name}}</h5>
                                <p class="card-text text-muted">
                                  @if(isset($product->price_khr))
                                    <span class="price-khr"> ៛ {{ number_format($product->price_khr) }}</span>
                                  @endif
                                  @if(isset($product->price_vnd))
                                    <span class="price-vnd"> ₫ {{ number_format($product->price_vnd) }}</span>
                                  @endif
                                  @if(isset($product->price_thb))
                                    <span class="price-thb"> ฿ {{ number_format($product->price_thb) }}</span>
                                  @endif
                                </p>
                                {{-- <p class="card-text text-muted">USD$ 350</p> --}}


                                <p class="text-muted">+4 Colors</p>
                            </div>
                            {{-- <div class="card-footer">
                                <i class="far fa-heart wishlist"></i>
                            </div> --}}
                        </div>                    
                    </div>
                    
                    @endif
                @endforeach               
            </div>
            
        </div>
    </div>

    
</body>


@endsection