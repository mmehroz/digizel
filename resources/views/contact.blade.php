@extends('layouts.app')


@section('content')

    <section id="digitel-second-sec" class="contact-sec-2 contact-sec-xii ">
        <div class="row">
            <div class="col-xl-8">
                <h2>Set a meeting with our professionals or call us today to discuss your project with our
                    team of industry-proven professionals</h2>

            </div>
        </div>
    </section>

    <section id="footer-form" class="contact-footer-form">

        <div class="row footer-form-sec contact-footer-form-sec">
            <div class="col-lg-7">

                <h2 class="contact-email">Tell us all about your project right here, or send us an email at <a
                        href="mailto:hello@digizel.com">hello@digizel.com </a></h2>

                <form id="expert_form" method="post">

                    @csrf

                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-success d-none" id="expert_msg_div">
                                <span id="expert_res_message"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="expert_full_name">Full name *</label>
                            <input type="text" name="expert_full_name" id="expert_full_name" class="footer-form-field"
                                   placeholder="Full Name">
                        </div>

                        <div class="col-md-6">
                            <label for="expert_company_name">Company name *</label>
                            <input type="text" name="expert_company_name" id="expert_company_name"
                                   class="footer-form-field"
                                   placeholder="Company name">
                        </div>

                    </div>

                    <div class="row margin-top">
                        <div class="col-md-6">
                            <label for="expert_email"> Email address *</label>
                            <input type="email" name="expert_email" id="expert_email" class="footer-form-field"
                                   placeholder="Email Address">
                        </div>

                        <div class="col-md-6">
                            <label for="expert_phone">Phone number *</label>
                            <input type="phone" name="expert_phone" id="expert_phone" class="footer-form-field"
                                   placeholder="0000 000 000">
                        </div>
                    </div>


                    <div class="margin-top">
                        <label for="expert_package"> What is your projected monthly budget for this project? *</label>
                        <select name="expert_package" id="expert_package" class="footer-form-field">
                            <option value=""> Please select</option>
                            <option value="2">opt 2</option>
                            <option value="3">opt 3</option>
                        </select>
                    </div>

                    <div class="margin-top">
                        <label for="expert_comment">How can we help you? *</label>
                        <textarea rows="4" cols="120" class="footer-text-area" name="expert_comment"
                                  placeholder="Tell us more about your project..."></textarea>
                    </div>

                    <div class="margin-top">
                        <button type="submit" id="expert_button"
                                class=" header-btn footer-form-btn site-button site-angle">Hear From an
                            Expert <img src="{{asset('public/assets/img/imgpshblue.png')}}" alt="icon"></button>
                    </div>
                </form>


            </div>
            <div class="col-lg-5">
                <div class="form-footer-right contact-footer-right">


                    <div class="review-slider">
                        <div class="footer-form-right">
                            <img src="public/assets/img/quot.png" alt="icon">
                            <br><br>
                            <p class="margin-client">We facilitate our customers with the most effective foot forward in
                                their niche market. We tend to carve styles that represent your complete brand in the
                                best manner.</p>
                            <p class="mark-form">Marketing Specialist </p>
                            <p><span>The Company Name  PVT(ltd)</span></p>
                        </div>
                        <div class="footer-form-right">
                            <img src="public/assets/img/quot.png" alt="icon">
                            <br><br>
                            <p class="margin-client">We facilitate our customers with the most effective foot forward in
                                their niche market. We tend to carve styles that represent your complete brand in the
                                best manner.</p>
                            <p class="mark-form">Marketing Specialist </p>
                            <p><span>The Company Name  PVT(ltd)</span></p>
                        </div>
                    </div>


                </div>
                <section id="money-back" class="contact-money-back">
                    <div class="pck-guaranteed  contact-pck-guaranteed">
                        <div class="text-center guaranteed">
                            <img src="public/assets/img/[ICO]01.svg" alt="icons">
                            <p>Create a new <br> digital experience</p>
                        </div>

                        <div class="text-center guaranteed">
                            <img src="public/assets/img/[ICO] (1)1.svg" alt="icons">
                            <p>Money Back <br>
                                Guarantee</p>
                        </div>

                        <div class="text-center guaranteed">
                            <img src="public/assets/img/[ICO] (2)0.svg" alt="icons">
                            <p>24/7 Customer <br>
                                Support</p>
                        </div>

                        <div class="text-center guaranteed">
                            <img src="public/assets/img/[ICO] (03).svg" alt="icons">
                            <p>Industry Specific <br>
                                Designers</p>
                        </div>

                    </div>
                </section>

            </div>


        </div>
    </section>



    <section id="carasoul" class="g-10">
        <h2>Trusted by businesses</h2>
        <div class="clients">
            <div class="clients-slider">
                <div><img src="public/assets/img/logo01.png" alt="" class="img-fluid"></div>
                <div><img src="public/assets/img/logo02.png" alt="" class="img-fluid"></div>
                <div><img src="public/assets/img/logo03.png" alt="" class="img-fluid"></div>
                <div><img src="public/assets/img/logo04.png" alt="" class="img-fluid"></div>
                <div><img src="public/assets/img/logo05.png" alt="" class="img-fluid"></div>
                <div><img src="public/assets/img/logo06.png" alt="" class="img-fluid"></div>
                <div><img src="public/assets/img/logo01.png" alt="" class="img-fluid"></div>
                <div><img src="public/assets/img/logo02.png" alt="" class="img-fluid"></div>
                <div><img src="public/assets/img/logo03.png" alt="" class="img-fluid"></div>
                <div><img src="public/assets/img/logo04.png" alt="" class="img-fluid"></div>
            </div>
        </div>
    </section>

@endsection
