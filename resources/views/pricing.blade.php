@extends('layouts.app')


@section('content')


<section id="portfolio-tabs" class="digitel-pricing-sec digitel-pricing-sec-exp">
        <div class="price-section pricing-page-sec">
            <div class="row">
                <div class="col-xl-6">
                    <h2 class="pricing-h2 pricing-h2">We make the best websites for your brand at the most affordable price</h2>
                    <p class="price-sec-p">We have some affordable pricing for your design and development need!</p>
                </div>
            </div>
</section>            

    <section id="portfolio-tabs" class="digitel-pricing-sec">
        <div class="price-section pricing-page-sec">
            <!--<div class="row">-->
            <!--    <div class="col-xl-6">-->
            <!--        <h2 class="pricing-h2 pricing-h2">We make the best websites for your brand at the most affordable price</h2>-->
            <!--        <p class="price-sec-p">We have some affordable pricing for your design and development need!</p>-->
            <!--    </div>-->
            <!--</div>-->

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab3" data-bs-toggle="pill" data-bs-target="#pills-home3" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Web design &amp; development</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab4" data-bs-toggle="pill" data-bs-target="#pills-profile4" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Mobile app development</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab5" data-bs-toggle="pill" data-bs-target="#pills-contact5" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Branding Design</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab6" data-bs-toggle="pill" data-bs-target="#pills-contact6" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Logo Design</button>
                </li>
            </ul>
          
            <div class="tab-content" id="pills-tabContent">
               @include(common.packages_pricing)
            </div>
    </section>
    <section id="pricing-packeges">
        <div class="packeges">
            <h2>customize your package</h2>
            <p>Wish to get a customized package? Start building one now</p>


            @include('forms.customize_form')

        </div>

    </section>

@include('common.services_div') 


    <section id="best-pricing-services" class="digitel-best-services">
        <div class="best-services-bg">

            <div class="row">
                <div class="col-xl-6 ">

                    <h2>Numbers That Move Mountains</h2>
                    <p>When we say we aim for the best, we definitely mean we set it as our goal to make a change and move mountains with the projects we do.
                        Reach us today with your project goals and join hands to design excellence.</p>

                    <div class="counter">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="employees counter-sec">
                                    <p class="counter-count">5678</p>
                                    <p class="employee-p">Satisfied customer</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="customer counter-sec">
                                    <p class="counter-count">15890</p>
                                    <p class="customer-p">Launched products</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="design counter-sec">
                                    <p class="counter-count">9892</p>
                                    <p class="design-p">Projects completed</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="order counter-sec">
                                    <p class="counter-count">1015</p>
                                    <p class="order-p">Daily visits</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-xl-5 bg-line-curve">
                    <img src="{{asset('public/assets/img/bg-line.svg')}}" class="img-fluid counter-img" alt="our services">
                </div>
            </div>
        </div>
    </section>

    <section id="money-back">
        <h2 class="money-back-h2">Easy and secure payment</h2>


        <div class="row payment-sec-1">
            <div class="col-md-6">
                <div class="trusted">
                    <img src="{{asset('public/assets/img/footer-logo11.png')}}" alt="payment" class="img-fluid">
                    <p class="bold-Trusted bold-Trusted-1">Trusted payment methods</p>
                    <p>When an unknown printer took a galley</p>
                </div>
            </div>
            <div class="col-md-6">

                <div class="trusted">
                    <img src="{{asset('public/assets/img/dmca-badge-w100-2x1-02.png')}}" alt="payment" class="img-fluid"> <img src="{{asset('public/assets/img/PngItem_2142827.png')}}" alt="payment" class="img-fluid">
                    <p class="bold-Trusted">Secure payments</p>
                    <p>Protected by DMCA & BBB</p>

                </div>
            </div>
        </div>

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
