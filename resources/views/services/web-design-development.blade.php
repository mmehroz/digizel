@extends('layouts.app')


@section('content')

    <section id="digitel-hero-sec"class="service-web-design" >
        <div class="row">
            <div class="col-xl-6 hero-left-sec web-service">
                <h2>We make the best websites for your brand at the most affordable price</h2>
                <div class="hero-sec-btn digitel-sec-btn service-web-design-col second-left-col">
                    <form action="{{route('website.form')}}" method="post" id="website-form">

                        @csrf

                        <div class="row">
                            <div class="col-md-8 form-text-filed">

                                @if(session()->has('website_message'))
                                    <div class="alert alert-success success_message">
                                        {{ session()->get('website_message') }}
                                    </div>
                                @endif

                                <input type="text" name="name" id="form_name" class="footer-form-field" placeholder="Enter your website" required>

                                    <br><br>

                                    @error('website_name')
                                    <div class="alert alert-danger m-t-2">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="about-fa-btn before-btn header-btn site-button site-angle"> Send Me a Quote  &nbsp; <i class="fas fa-angle-up"></i> </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

            <div class="col-xl-6 hero-right-sec">
            </div>
        </div>
    </section>

<div id="player-overlay">
  <video   id="backgroundd-video" autoplay muted >
    <source src="{{asset('public/assets/img/service-web.m4v')}}" type="video/mp4"/>
  </video>    
</div>


    <section id="scrool-arrow">
        <a href="#digitel-second-sec" class="digitel-services-sec"> <img src="{{asset('public/assets/img/arrow down.png')}}" class="img-fluid" alt="arrow">  </a>
    </section>


    <section id="digitel-second-sec">
        <div class="row">
            <div class="col-xl-6">
                <h2>We Make the Best Websites For Your brand at the most affordable price</h2>
                <p>We facilitate our customers with the most effective foot forward in their niche market.
                    We tend to carve styles that represent your complete brand in the best manner. With us, you will get distinctive style which will create your complete stand except for many different similar brands.
                    <br> <br>
                    <b> Here is a depiction of the process we follow </b> </p>
            </div>
            <div class="col-xl-6">
                <div class="services-sec-tech1  digitel-second-sec">
                    <p><img src="{{asset('public/assets/img/Android.png')}}" class="img-fluid" alt="technologies">
                        <img src="{{asset('public/assets/img/Angular-JS.png')}}" class="img-fluid" alt="technologies">
                        <img src="{{asset('public/assets/img/Appstore.png')}}" class="img-fluid" alt="technologies">
                        <img src="{{asset('public/assets/img/Codeignitor.png')}}" class="img-fluid" alt="technologies">
                        <img src="{{asset('public/assets/img/html-5.png')}}" class="img-fluid" alt="technologies">
                        <img src="{{asset('public/assets/img/Jquery.png')}}" class="img-fluid" alt="technologies">
                        <img src="{{asset('public/assets/img/Kotlin.png')}}" class="img-fluid" alt="technologies">
                    </p>
                </div>
                <div class="services-sec-tech2">
                    <p><img src="{{asset('public/assets/img/Laravel.png')}}" class="img-fluid" alt="technologies">
                        <img src="{{asset('public/assets/img/PHP.png')}}" class="img-fluid" alt="technologies">
                        <img src="{{asset('public/assets/img/React-Native.png')}}" class="img-fluid" alt="technologies">
                        <img src="{{asset('public/assets/img/Swift.png')}}" class="img-fluid" alt="technologies">
                        <img src="{{asset('public/assets/img/Woocommerce.png')}}" class="img-fluid" alt="technologies">

                    </p>
                </div>

            </div>
        </div>
    </section>

    <section id="digitel-scop">
        <img src="{{asset('public/assets/img/Capturefff.png')}}"  class="desktop-show-scope  img-fluid" alt="scop">
        <div class="mobile-show-scope">
            <img src="{{asset('public/assets/img/01.svg')}}"  class="img-fluid" alt="scop"> <br>
            <img src="{{asset('public/assets/img/02.svg')}}"  class="img-fluid" alt="scop"><br>
            <img src="{{asset('public/assets/img/03.svg')}}"  class="img-fluid" alt="scop"><br>
            <img src="{{asset('public/assets/img/04.svg')}}"  class="img-fluid" alt="scop"><br>
            <img src="{{asset('public/assets/img/05.svg')}}"  class="img-fluid" alt="scop">
        </div>
    </section>


    <section id="portfolio-tabs" class="digitel-pricing-sec">
        <div class="price-section">
            <h2 class="pricing-h2 digitel-h2">Pricing</h2>
            <p class="price-sec-p">We have some affordable pricing for your design and development need!</p>
            <div class="tab-content" id="pills-tabContent">
            @include('common.packages_pricing')  
            </div>
    </section>



    <section id="best-services" class="digitel-best-services">
        <div class="best-services-bg">

            <h2>What to expect from us?</h2>
            <p>We have some affordable pricing for your design and development need!</p>
            <div class="row">
                <div class="col-xl-6 service-column">
                    <h2>What is it?</h2>
                    <p>We hand-pick experts with the right skills and expertise to quickly join your project.</p>

                    <h2 class="startup-h2">What are the benefits?</h2>
                    <p>It's cheaper than hiring and onboarding a new in-house team member.
                        You get first-class experts for whom we are responsible with our reputation and money.</p>

                    <h2 class="startup-h2">Who can I hire?</h2>
                    <p>Our designers, typesetters, programmers, and marketing specialists are always there to help you implement any project.</p>
                    <h2 class="startup-h2">When is it needed?</h2>
                    <p>When you need to implement a customer's project but don't have the right expert in your team.</p>
                </div>




                <div class="col-xl-5">
                    <img src="{{asset('public/assets/img/Mask Group 26.svg')}}" class="img-fluid" alt="our services">
                </div>
            </div>
        </div>
    </section>

    <section id ="money-back">
        <div class="pck-guaranteed">
            <div class="text-center guaranteed">
                <img src="{{asset('public/assets/img/[ICO]01.svg')}}" alt="icons">
                <p>Create a new <br> digital experience</p>
            </div>

            <div class="text-center guaranteed">
                <img src="{{asset('public/assets/img/[ICO] (1)1.svg')}}" alt="icons">
                <p>Money Back <br>
                    Guarantee</p>
            </div>

            <div class="text-center guaranteed">
                <img src="{{asset('public/assets/img/[ICO] (2)0.svg')}}" alt="icons">
                <p>24/7 Customer <br>
                    Support</p>
            </div>

            <div class="text-center guaranteed">
                <img src="{{asset('public/assets/img/[ICO] (03).svg')}}" alt="icons">
                <p>Industry Specific <br>
                    Designers</p>
            </div>

        </div>
    </section>

@include('common.services_div') 




    <section id ="carasoul" class="g-10">
        <h2>Trusted by businesses</h2>
        <div class="clients"  >
            <div class="clients-slider">
                <div> <img src="{{asset('public/assets/img/logo01.png')}}" alt=""  class="img-fluid"></div>
                <div> <img src="{{asset('public/assets/img/logo02.png')}}" alt="" class="img-fluid"> </div>
                <div> <img src="{{asset('public/assets/img/logo03.png')}}" alt="" class="img-fluid"> </div>
                <div> <img src="{{asset('public/assets/img/logo04.png')}}" alt="" class="img-fluid"> </div>
                <div> <img src="{{asset('public/assets/img/logo05.png')}}" alt="" class="img-fluid"> </div>
                <div> <img src="{{asset('public/assets/img/logo06.png')}}" alt=""  class="img-fluid"></div>
                <div> <img src="{{asset('public/assets/img/logo01.png')}}" alt="" class="img-fluid"> </div>
                <div> <img src="{{asset('public/assets/img/logo02.png')}}" alt="" class="img-fluid"> </div>
                <div> <img src="{{asset('public/assets/img/logo03.png')}}" alt="" class="img-fluid"> </div>
                <div> <img src="{{asset('public/assets/img/logo04.png')}}" alt="" class="img-fluid"> </div>
            </div>
        </div>
    </section>

    @include('common.footer_form')

@endsection
