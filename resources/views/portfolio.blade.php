@extends('layouts.app')


@section('content')

    <section id="digitel-second-sec" class="portfolio-page digitel-pricing-sec-exii">
        <div class="container-fluid">
        <div class="row">
            <div class="col-xl-8">
                <h2>We make the best websites for Your brand at the most affordable price</h2>

            </div>
        </div>
        </div>
    </section>

    <section id="portfolio-tabs" class="portfolio-page-tabs">
        <h2>Our Portfolio</h2>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                        type="button" role="tab" aria-controls="pills-home" aria-selected="true">Web design &
                    development
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                        type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Mobile app
                    development
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
                        type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Branding Design
                </button>
            </li>

            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab1" data-bs-toggle="pill" data-bs-target="#pills-contact1"
                        type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Logo Design
                </button>
            </li>

        </ul>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/askbeautytherapist-01.webp')}}" class="img-fluid" alt="scroo2l">
                    </div>
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/clikdata-t03.webp')}}" class="img-fluid" alt="scroo2l">
                    </div>
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/collegeinsights-t01.webp')}}" class="img-fluid" alt="scroo23l">
                    </div>
                </div>
                <div class="row port-page-content">
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/cronusc-t01.webp')}}" class="img-fluid" alt="scrool">
                    </div>
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/debraemerson-t04.webp')}}" class="img-fluid" alt="scroo2l">
                    </div>
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/designondemand-t01.webp')}}" class="img-fluid" alt="scrool">
                    </div>
                </div>
                <div class="row port-page-content">
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/frankelfoot-t04.webp')}}" class="img-fluid" alt="scrool">
                    </div>
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/goforclose-t03.webp')}}" class="img-fluid" alt="scroo2l">
                    </div>
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/inmanequities-t02.webp')}}" class="img-fluid" alt="scrool">
                    </div>
                </div>
                <div class="row port-page-content">
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/iquotexpress-t01.webp')}}" class="img-fluid" alt="scrool">
                    </div>
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/makechange-t01.webp')}}" class="img-fluid" alt="scroo2l">
                    </div>
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/realtor-houston-t02.webp')}}" class="img-fluid" alt="scrool">
                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row">
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/ecomm-t.jpg')}}" class="img-fluid" alt="scrool">
                    </div>
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/groceryapp-t.jpg')}}" class="img-fluid" alt="scroo2l">
                    </div>
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/vamos-autos-t.jpg')}}" class="img-fluid" alt="scrool">
                    </div>
                </div>
                


            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="row">
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/Ec4ZiTpoO6bm1.png')}}" class="img-fluid" alt="scrool">
                    </div>
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/Scroll Groupfghfg2.jpg')}}" class="img-fluid" alt="scroo2l">
                    </div>
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/Scroll Groupasdas3.png')}}" class="img-fluid" alt="scrool">
                    </div>

                </div>
                <div class="row port-page-content">
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/Ec4ZiTpoO6bm1.png')}}" class="img-fluid" alt="scrool">
                    </div>
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/Scroll Groupfghfg2.jpg')}}" class="img-fluid" alt="scroo2l">
                    </div>
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/Scroll Groupasdas3.png')}}" class="img-fluid" alt="scrool">
                    </div>
                </div>
                <div class="row port-page-content">
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/Ec4ZiTpoO6bm1.png')}}" class="img-fluid" alt="scrool">
                    </div>
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/Scroll Groupfghfg2.jpg')}}" class="img-fluid" alt="scroo2l">
                    </div>
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/Scroll Groupasdas3.png')}}" class="img-fluid" alt="scrool">
                    </div>
                </div>
                <div class="row port-page-content">
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/Ec4ZiTpoO6bm1.png')}}" class="img-fluid" alt="scrool">
                    </div>
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/Scroll Groupfghfg2.jpg')}}" class="img-fluid" alt="scroo2l">
                    </div>
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/Scroll Groupasdas3.png')}}" class="img-fluid" alt="scrool">
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-contact1" role="tabpanel" aria-labelledby="pills-contact-tab1">
                <div class="row">
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/0001.jpg')}}" class="img-fluid" alt="scrool">
                    </div>
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/0002.jpg')}}" class="img-fluid" alt="scroo2l">
                    </div>
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/0003.jpg')}}" class="img-fluid" alt="scrool">
                    </div>

                </div>
                <div class="row port-page-content">
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/0004.jpg')}}" class="img-fluid" alt="scrool">
                    </div>
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/0005.jpg')}}" class="img-fluid" alt="scroo2l">
                    </div>
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/0006.jpg')}}" class="img-fluid" alt="scrool">
                    </div>
                </div>
                <div class="row port-page-content">
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/0007.jpg')}}" class="img-fluid" alt="scrool">
                    </div>
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/0008.jpg')}}" class="img-fluid" alt="scroo2l">
                    </div>
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/0009.jpg')}}" class="img-fluid" alt="scrool">
                    </div>
                </div>
                <div class="row port-page-content">
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/0010.jpg')}}" class="img-fluid" alt="scrool">
                    </div>
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/0011.jpg')}}" class="img-fluid" alt="scroo2l">
                    </div>
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/0012.jpg')}}" class="img-fluid" alt="scrool">
                    </div>
                </div>

            </div>

            <div class="tab-pane fade" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact-tab2">
                <div class="row">
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/Ec4ZiTpoO6bm1.png')}}" class="img-fluid" alt="scrool">
                    </div>
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/Scroll Groupfghfg2.jpg')}}" class="img-fluid" alt="scroo2l">
                    </div>
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/Scroll Groupasdas3.png')}}" class="img-fluid" alt="scrool">
                    </div>

                </div>
                <div class="row port-page-content">
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/Ec4ZiTpoO6bm1.png')}}" class="img-fluid" alt="scrool">
                    </div>
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/Scroll Groupfghfg2.jpg')}}" class="img-fluid" alt="scroo2l">
                    </div>
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/Scroll Groupasdas3.png')}}" class="img-fluid" alt="scrool">
                    </div>
                </div>
                <div class="row port-page-content">
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/Ec4ZiTpoO6bm1.png')}}" class="img-fluid" alt="scrool">
                    </div>
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/Scroll Groupfghfg2.jpg')}}" class="img-fluid" alt="scroo2l">
                    </div>
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/Scroll Groupasdas3.png')}}" class="img-fluid" alt="scrool">
                    </div>
                </div>
                <div class="row port-page-content">
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/Ec4ZiTpoO6bm1.png')}}" class="img-fluid" alt="scrool">
                    </div>
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/Scroll Groupfghfg2.jpg')}}" class="img-fluid" alt="scroo2l">
                    </div>
                    <div class="col-md-4 portfolio-scrool-img">
                        <img src="{{asset('public/assets/img/Scroll Groupasdas3.png')}}" class="img-fluid" alt="scrool">
                    </div>
                </div>
            </div>
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
                    <a href="https://digizel.com/portfolio" class="before-btn  avail-col-btn">Send Me a Quote &nbsp; &nbsp; <i
                            class="fas fa-angle-up"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="avail-col  avail-blue-bg">
                    <p>We don't just want to tell you about the beautiful work we do</p>
                    <h2>Ready to speak with an expert?</h2>
                    <a href="contact.html" class="before-btn  avail-col-btn"> Schedule a Call &nbsp; &nbsp; <i
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
