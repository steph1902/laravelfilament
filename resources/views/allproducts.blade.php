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
                @foreach ($products as $product)
                    @if (isset($product->product_image[0]))
                    <div class="col five-columns mb-20">
                        <div class="card h-100 border-0">
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



{{-- 
<script type="text/javascript">
    window.onload = function() {

        try {
            const currencySelector = document.getElementById('currency-selector');
            if (!currencySelector) {
                console.error('Currency selector not found');
                return;
            }

            const prices = document.querySelectorAll('.price-khr, .price-vnd, .price-thb');
            if (!prices || prices.length === 0) {
                console.error('Prices not found');
                return;
            }

            // Set the default currency to 'khr'
            currencySelector.value = 'khr';

            // Hide all prices initially except the default currency (KHR)
            prices.forEach((price) => {
                if (!price.classList.contains('price-khr')) {
                    price.style.display = 'none';
                }
            });

            // Add an event listener to the currency selector
            currencySelector.addEventListener('change', (e) => {
                const selectedCurrency = e.target.value;
                console.log('Selected currency: ${selectedCurrency}');

                // Hide all prices first
                prices.forEach((price) => {
                    price.style.display = 'none';  // Hide all prices
                });

                // Show the selected currency prices
                const selectedPrices = document.querySelectorAll(`.price-${selectedCurrency}`);
                if (!selectedPrices || selectedPrices.length === 0) {
                    console.error(`No prices found for currency ${selectedCurrency}`);
                    return;
                }

                selectedPrices.forEach((price) => {
                    price.style.display = 'inline'; // Show the selected currency prices
                });
            });
        } catch (error) {
            console.error('Error occurred:', error);
        }
    };
</script> --}}




@endsection