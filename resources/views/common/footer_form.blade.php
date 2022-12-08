<section id="footer-form">
    <div class="row footer-form-sec">
        <div class="col-lg-7">
            <h2>Our expert team is all prepared to hear from you; fill in the form below and we'll contact you as soon as possible. Or, call us using the number given at the top of the page.</h2>
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
            <div class="footer-logo">
                <img src="{{asset('public/assets/img/Paymentss.webp')}}" class="img-fluid" alt="Logo">
                <img src="{{asset('public/assets/img/dmca-badge-w100-2x1-02.png')}}" class="img-fluid" alt="Logo">
                <img src="{{asset('public/assets/img/PngItem_2142827.png')}}" class="img-fluid" alt="Logo">
            </div>

        </div>
        <div class="col-lg-5">
            <div class="form-footer-right">
                <h2>Customer Reviews</h2>

                <div class="review-slider">
                    <div class="footer-form-right">
                        <img src="{{asset('public/assets/img/quot.png')}}" alt="icon">
                        <br><br>
                        <p class="margin-client">'They do all that they say...  <br>
Digizel is a genuinely needed blessing and surpassed our assumptions all around. They are straightforward, clear, they deal with ALL your requirements quickly, they are reliable and you can depend on them.' 
</p>
                        <p class="mark-form">Mathew Perry </p>
                        <p><span>Digital Marketing Manager, Luxury Villa company</span></p>
                    </div>
                    <div class="footer-form-right">
                        <img src="{{asset('public/assets/img/quot.png')}}" alt="icon">
                        <br><br>
                        <p class="margin-client">'Working with the Digizel team has been a most wonderful experience! Their commitment and energy for what they do is exemplified by their unmatched customer service and awareness of the particular requirements of the business. We anticipate a dependable and prosperous relationship!'</p>
                        <p class="mark-form"> Andrea Stevenson </p>
                        <p><span>Head of Social Media, Real Estate Consultancy</span></p>
                    </div>
                </div>


                <div class="clients-col footer-clients-col-yellow clients-col-yellow">
                    <div class="footer-right-bg">
                        <h2>Ready to speak with an expert. Give us a ring.</h2>
                        <a href="tel:(866) 313-1877"> <img src="{{asset('public/assets/img/ICO-footer.png')}}" class="img-fluid number"
                                                         alt="logo"> (866) 313-1877 </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
