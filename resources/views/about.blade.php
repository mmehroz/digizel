@extends('layouts.app')


@section('content')

    <section id="digitel-hero-sec" class="about-hero">
        <div class="row">
            <div class="col-xl-6 hero-left-sec web-service">
                <h2>We make the best websites for your brand at the most affordable price</h2>
                <div class="hero-sec-btn digitel-sec-btn service-web-design-col second-left-col">
                    <form action="{{route('website.form')}}" method="post">

                        @csrf


                        @if(session()->has('website_message'))
                            <div class="alert alert-success success_message">
                                {{ session()->get('website_message') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-md-8 form-text-filed">
                                <input type="text" name="website_name" id="form_name" class="footer-form-field"
                                       placeholder="Enter your website" required>

                                <br><br>

                                @error('website_name')
                                <div class="alert alert-danger m-t-2">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="about-fa-btn before-btn header-btn site-button site-angle">
                                    Send Me a Quote &nbsp; <i class="fas fa-angle-up"></i></button>
                            </div>
                        </div>
                    </form>

                </div>


                <div class="mobile-servie-sec eco-mobile-sec">
                    <img src="{{asset('public/assets/img/header-sm-about.jpg')}}" alt="bg" class="img-fluid" width="100%">
                </div>


            </div>

            <div class="col-xl-6 hero-right-sec">
            </div>
        </div>
    </section>

    <section id="scrool-arrow">
        <a href="#digitel-second-sec" class="digitel-services-sec"> <img src="{{asset('public/assets/img/arrow down.png')}}"
                                                                         class="img-fluid"
                                                                         alt="arrow"> </a>
    </section>


    <section id="digitel-second-sec" class="about-sec-2">
        <div class="row">
            <div class="col-xl-8">
                <h2>We make the best websites for Your brand at the most affordable price</h2>
                <p>We facilitate our customers with the most effective foot forward in their niche market.
                    We tend to carve styles that represent your complete brand in the best manner. With us, you will get
                    distinctive style which will create your complete stand except for many different similar brands.
                    <br> <br>
                    <b> Here is a depiction of the process we follow </b></p>
                <div class="about-btn-view">
                    <a href="https://digizel.com/pricing" class="header-btn hero-pkg-btn site-button site-angle"><p>View Packages
                            &nbsp;
                            <img src="{{asset('public/assets/img/imgpshblue.png')}}" alt="icon">
                        </p></a>
                </div>

            </div>
    </section>

    <section id="about-process">

        <h2 class="about-process-h2">What to expect from us?</h2>
        <div class="row">
            <div class="col-md-5 ">
                <div class="about-process-col">
                    <div class="about-img-procc">
                        <img src="{{asset('public/assets/img/about1.PNG')}}" alt="cilcle" class="img-fluid" width="175px">
                    </div>
                    <h2>You Fill Out the Order Form</h2>
                    <p>Once you choose your desired package for your desired service that you want to order,
                        fill out our simple and secure order form. Confirm the order by paying the amount mentioned.</p>
                </div>
            </div>
            <div class="col-md-2 ">

            </div>
            <div class="col-md-5 ">
            </div>
        </div>

        <div class="row">
            <div class="col-md-5">

            </div>
            <div class="col-md-2">

            </div>
            <div class="col-md-5">
                <div class="about-process-col about-process-col-right about-process-col-right-2">
                    <div class="about-img-procc">
                        <img src="{{asset('public/assets/img/about2.PNG')}}" alt="cilcle" class="img-fluid" width="175px">
                    </div>
                    <h2>Order Assigned To The Team</h2>
                    <p>As soon as the order is received, our Project Management department analyze the nature and scope
                        of
                        the project and then assign
                        it to the relevant department according to the package.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5">
                <div class="about-process-col  about-process-col-left">
                    <div class="about-img-procc">
                        <img src="{{asset('public/assets/img/about3.PNG')}}" alt="cilcle" class="img-fluid" width="175px">
                    </div>
                    <h2>Initial Mockups Delivery</h2>
                    <p>Once the project is assigned to the relevant department, the team will start working on the
                        project
                        as per the given brief.
                        You are likely to receive initial update within 48 – 72 hours of the order.</p>
                </div>
            </div>
            <div class="col-md-2">

            </div>
            <div class="col-md-5">
            </div>
        </div>

        <div class="row">
            <div class="col-md-5">

            </div>
            <div class="col-md-2">

            </div>
            <div class="col-md-5">
                <div class="about-process-col about-process-col-right about-process-col-right-1">
                    <div class="about-img-procc">
                        <img src="{{asset('public/assets/img/about4.PNG')}}" alt="cilcle" class="img-fluid" width="175px">
                    </div>
                    <h2>Receive the End Product</h2>
                    <p>After your agreement and satisfaction on the ordered product, you will receive the source file in
                        your desired format.
                        Remember, you will still be entitled to our after-sales support (for life!).</p>
                </div>
            </div>
        </div>

        <div class="about-process-img">
            <img src="{{asset('public/assets/img/process44.svg')}}" alt="process" class="img-fluid">
        </div>

    </section>


    <section id="money-back">
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


    <section id="avail">
        <div class="row">
            <div class="col-lg-6">
                <div class="avail-col">
                    <p>Want To Avail Our Services?</p>
                    <h2>We saved a spot for you to customize your package.</h2>
                    <a href="{{route('contact')}}" class="before-btn  avail-col-btn">Send Me a Quote &nbsp; &nbsp; <i
                            class="fas fa-angle-up"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="avail-col  avail-blue-bg">
                    <p>We don't just want to tell you about the beautiful work we do</p>
                    <h2>Ready to speak with an expert?</h2>
                    <a href="{{route('contact')}}" class="before-btn  avail-col-btn"> Schedule a Call &nbsp; &nbsp; <i
                            class="fas fa-angle-up"></i>
                    </a>
                </div>
            </div>
    </section>


    <section id="carasoul" class="g-10">
        <h2>Trusted by businesses</h2>
        <div class="clients">
            <div class="clients-slider">
                <div><img src="{{asset('public/assets/img/logo01.png')}}" alt="" class="img-fluid"></div>
                <div><img src="{{asset('public/assets/img/logo02.png')}}" alt="" class="img-fluid"></div>
                <div><img src="{{asset('public/assets/img/logo03.png')}}" alt="" class="img-fluid"></div>
                <div><img src="{{asset('public/assets/img/logo04.png')}}" alt="" class="img-fluid"></div>
                <div><img src="{{asset('public/assets/img/logo05.png')}}" alt="" class="img-fluid"></div>
                <div><img src="{{asset('public/assets/img/logo06.png')}}" alt="" class="img-fluid"></div>
                <div><img src="{{asset('public/assets/img/logo01.png')}}" alt="" class="img-fluid"></div>
                <div><img src="{{asset('public/assets/img/logo02.png')}}" alt="" class="img-fluid"></div>
                <div><img src="{{asset('public/assets/img/logo03.png')}}" alt="" class="img-fluid"></div>
                <div><img src="{{asset('public/assets/img/logo04.png')}}" alt="" class="img-fluid"></div>
            </div>
        </div>
    </section>

    @include('common.footer_form')


@endsection
