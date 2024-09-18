@extends('layouts.app')

@section('content')

<style>
    .header__menu ul li a {
        color: black;
    }

    .product-column {
        flex: 0 0 20%;
        max-width: 20%;
        margin-bottom: 20px;
    }

    @media (max-width: 767px) {
        .product-column {
            width: 100% !important;
            max-width: 100% !important;
            flex: 0 0 100% !important;
        }

        .card-img-top {
            object-fit: contain !important;
        }

        #product-name-and-price {
            text-align: center !important;
        }

        .product {
            padding-bottom: 10px !important;
        }

        .products-available {
            display: none !important;
        }
    }
</style>

<div class="container py-4">
    <small class="products-available">25 Products Available</small>
    <div class="d-flex justify-content-between align-items-center mb-4">
    </div>

    <div class="row">
        @foreach ($products as $product)
            @if (isset($product->product_image[0]))
                <div class="col product-column mb-20">
                    <div class="lazyload card h-100 border-0 product {{ $product->category }}">
                        <a href="{{ route('product-details', $product->id) }}">
                            <img class="card-img-top img-fluid" src="{{ asset('storage/' . $product->product_image[0]) }}" alt="Ego 01(B)" style="max-height: 200px; object-fit: cover;">
                        </a>

                        <div class="card-body">
                            <h5 id="product-name-and-price" class="card-title">{{ $product->name }}</h5>
                            <p id="product-name-and-price" class="card-text text-muted">
                                @if (isset($product->price_khr))
                                    <span class="product-price price-khr"> ៛ {{ number_format($product->price_khr) }}</span>
                                @endif
                                @if (isset($product->price_vnd))
                                    <span class="product-price price-vnd"> ₫ {{ number_format($product->price_vnd) }}</span>
                                @endif
                                @if (isset($product->price_thb))
                                    <span class="product-price price-thb"> ฿ {{ number_format($product->price_thb) }}</span>
                                @endif
                                @if (isset($product->price_usd))
                                    <span class="product-price price-usd"> US$ {{ number_format($product->price_usd) }}</span>
                                @endif
                                @if (isset($product->price_idr))
                                    <span class="product-price price-idr"> IDR {{ number_format($product->price_idr) }}</span>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>

            @endif
        @endforeach
    </div>
</div>

@endsection
