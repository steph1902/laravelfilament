@extends('layouts.app')
@section('content')

{{-- start --}}
<style>
     .header__menu ul li a
    {
        color: black;
    }
</style>

<!-- Shop Details Section Begin -->
<section class="shop-details">
    <div class="product__details__pic">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__details__breadcrumb">
                        <a href="{{url('home')}}">Home</a>
                        <a href="{{url('all-products')}}">Shop</a>
                        <span>Product Details</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <ul class="nav nav-tabs" role="tablist">
                        @if (!empty($product) && !empty($product->product_image))
                            @foreach ($product->product_image as $key => $productImage)
                                <li class="nav-item">
                                    <a class="nav-link {{ $loop->first ? 'active' : '' }}"  href="#tabs-{{ $key + 1 }}" role="tab" data-toggle="tab">
                                        <div class="product__thumb__pic set-bg" data-setbg="{{ asset('storage/' . $productImage) }}">
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        @endif                       
                    </ul>
                </div>
                <div class="col-lg-6 col-md-9">
                    <div class="tab-content">
                        @if (!empty($product) && !empty($product->product_image))
                            @foreach ($product->product_image as $key => $productImage)
                                <div class="tab-pane {{ $loop->first ? 'active' : '' }}" id="tabs-{{ $key + 1 }}" role="tabpanel">
                                    <div class="product__details__pic__item">
                                        <div class="tab-content">
                                            <img src="{{ asset('storage/' . $productImage) }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product__details__content">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="product__details__text">
                        <h3>
                            {{$product->name}}
                        </h3>                        
                        <h4>                            
                            @if(isset($product->price_khr))
                                <span class="price-khr"> ៛ {{ number_format($product->price_khr) }}</span>
                            @endif
                            @if(isset($product->price_vnd))
                                <span class="price-vnd"> ₫ {{ number_format($product->price_vnd) }}</span>
                            @endif
                            @if(isset($product->price_thb))
                                <span class="price-thb"> ฿ {{ number_format($product->price_thb) }}</span>
                            @endif
                        </h4>
                        <div class="product__details__option">
                            <div class="product__details__option__size">
                                <span>Size:</span>
                                <label for="xxl">S
                                    <input type="radio" id="xxl">
                                </label>
                                <label for="xl">M
                                    <input type="radio" id="xl">
                                </label>
                                <label for="l">L
                                    <input type="radio" id="l">
                                </label>                                
                            </div>
                            
                            <div class="product__details__option__color">
                                <span>
                                    Color :
                                        @if ($product->colour_name != 'n/a')
                                            <label for="">
                                                {{ $product->colour_name }}
                                            </label>
                                        @else
                                            <label for="">
                                                n/a
                                            </label>
                                        @endif
                                </span>                                
                            </div>
                        </div>
                        <div class="product__details__cart__option">
                            <a href="#" class="primary-btn">add to cart</a>
                        </div>
                        <div class="product__details__last__option">
                            <ul>
                                <li><span>Categories:</span> {{$product->category}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-bottom: 10%;"></div>            
        </div>
    </div>
</section>


@endsection