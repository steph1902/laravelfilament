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

    <style>
        /* this is not working */
        @media (max-width: 768px) {            
            #category {
                display: none !important;
            }
        }
    </style>

    <div class="container justify-content-center">
        <div id="category" class="row mx-auto col-md-6 py-3 border-bottom d-flex justify-content-center align-items-center text-center" style="align-content: center;">
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

        {{-- 2. make this products mobile friendly and user friendly with best practice industry standards,
         currently in large screen the products shows in 1 row 5 cols or 1 row five prodicts, for mobile size, 
         I think it's better to 1 row 1 cols or 1 row one product, also make it responsive --}}
        <style>            
            /* how to make the image or photo 100% height and not cropped? but still aligned with the text name and price nicely?  */
            @media (max-width: 767px) {
                .five-columns {
                    width: 100% !important;
                    max-width: 100% !important;
                    flex: 0 0 100% !important;

                .card-img-top {
                    object-fit: contain !important;
                    
                    }
                }
                #product-name-and-price {
                    text-align: center !important;
                }
                .product
                {
                    padding-bottom: 10px !important;
                }
                .products-available {
                    display: none !important;
                }
            }
        </style>
        <div class="py-4">
            <small class="products-available">25 Products Available</small>
            <div class="d-flex justify-content-between align-items-center mb-4">                
            </div>

            <div class="row">
                @foreach ($products as $product)
                    @if (isset($product->product_image[0]))
                    <div class="col five-columns mb-20">
                        <div class="lazyload card h-100 border-0 product {{$product->category}}">
                            <a href="{{ route('product-details', $product->id) }}">
                                <img class="card-img-top img-fluid" src="{{ asset('storage/' . $product->product_image[0]) }}" alt="Ego 01(B)" style="max-height: 200px; object-fit: cover;">
                            </a>
                                                    
                            <div class="card-body">
                                <h5 id="product-name-and-price" class="card-title">{{$product->name}}</h5>
                                @if($product->show_prices_flag == 1)                        
                                <p id="product-name-and-price" class="card-text text-muted">
                                  @if(isset($product->price_khr))
                                    <span class="product-price price-khr"> ៛ {{ number_format($product->price_khr) }}</span>
                                  @endif
                                  @if(isset($product->price_vnd))
                                    <span class="product-price price-vnd"> ₫ {{ number_format($product->price_vnd) }}</span>
                                  @endif
                                  @if(isset($product->price_thb))
                                    <span class="product-price price-thb"> ฿ {{ number_format($product->price_thb) }}</span>
                                  @endif
                                  @if(isset($product->price_usd))
                                    <span class="product-price price-usd"> US$ {{ number_format($product->price_usd) }}</span>
                                  @endif
                                  @if(isset($product->price_idr))
                                    <span class="product-price price-idr"> IDR {{ number_format($product->price_idr) }}</span>
                                  @endif
                                </p>
                                @endif
                                <p id="product-name-and-price">
                                    <small>
                                        <i>Join <a href="https://t.me/+2JsS2nzNsrRkMGE9" target="_blank">Telegram</a> For Price Detail </i>
                                    </small>
                                </p>                                
                            </div>
                        </div>                    
                    </div>
                    
                    @endif
                @endforeach               
            </div>
            
        </div>
    </div>

    
</body>


@endsection