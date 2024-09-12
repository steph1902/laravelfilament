@extends('layouts.app')
@section('content')

{{-- start --}}
<style>
     .header__menu ul li a
    {
        color: black;
    }
</style>


    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about__pic">
                        {{-- <img src="img/about/about-us.jpg" alt=""> --}}
                        <img src="{{asset('portrait-photos/1.jpg')}}" alt="">
                        {{-- background-image: url('{{ asset('portrait-photos/1.jpg') }}'); --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="about__text">
                        <div class="section-title">
                            <h4 style="text-align: left;">About Us</h4>
                            <p style="text-align: left;">                                
<b>Outari</b> is a luxury clothing brand dedicated to creating sophisticated, stylish apparel for women. <br>
Our carefully curated collection blends elegance with comfort and modernity, offering versatile pieces for every occasion. <br>
At <b>Outari</b>, we celebrate individuality and empower women to express their unique style with confidence. <br>
Whether you're dressing for a special event or embracing everyday chic, our designs ensure that you feel both fashionable and comfortable. <br>
<br><br>
<blockquote>
    <b> <i> Join us in redefining women's fashion—where timeless style meets contemporary living. </i> </b>
</blockquote>
                            </p>
                            {{-- <h2>Who We Are?</h2> --}}
                        </div>
                    </div>
                </div>
            </div>

            <hr><hr><br>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="about__text">
                        <h4 style="text-align: left;">Vision</h4>
                        <p>
                            To become <b>Asia’s premier women’s clothing brand</b>, celebrated for our trendsetting designs and unparalleled quality. 
                            We aim to empower every woman with garments that make her feel chic, confident, and effortlessly stylish.                    
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="about__text">
                        <h4 style="text-align: left;">Mission</h4>
                        <p>                            
Our goal is <b>to curate a collection that seamlessly combines comfort with style</b>,  ensuring every woman finds the ideal outfit for any occasion. 
We celebrate individuality and versatility, offering a diverse range of clothing designed to complement the modern woman's dynamic lifestyle.
                        </p>
                    </div>
                </div>                
            </div>

            <hr><hr><br>
            

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h4 style="text-align: left;">Core Values</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="about__text">
                        <div class="section-title">
                            <h5 style="text-align: left;">Trend-Driven Design</h5>
                            <p style="text-align: left;">
                                Our collections are crafted with the latest fashion trends in mind, 
                                ensuring that our customers always enjoy access to the most stylish and contemporary pieces.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="about__text">
                        <div class="section-title">
                            <h5 style="text-align: left;">Affordable Quality</h5>
                            <p style="text-align: left;">
                                We believe that exceptional fashion should be accessible to everyone. 
                                Our collection offers stylish, high-quality pieces at prices that make looking great both attainable and affordable.
                            </p>
                        </div>
                    </div>
                </div>                
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="about__text">
                        <div class="section-title">
                            <h5 style="text-align: left;">Community Engagement</h5>
                            <p style="text-align: left;">
                                We cultivate a vibrant community of fashion enthusiasts by actively seeking your feedback and encouraging interaction. 
                                Connect with us on <a href="#">Facebook</a> and <a href="#">Telegram</a> to share 
                                your thoughts and stay updated as we continually refine our offerings.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="about__text">
                        <div class="section-title">
                            <h5 style="text-align: left;">Seamless Online Shopping</h5>
                            <p style="text-align: left;">
                                Our user-friendly e-commerce platform offers a smooth and intuitive shopping experience, 
                                featuring comprehensive product descriptions and customer reviews to help you make 
                                informed choices effortlessly.
                            </p>
                        </div>
                    </div>
                </div>                
            </div>

        
        </div>
    </section>
    <!-- About Section End -->
    
@endsection