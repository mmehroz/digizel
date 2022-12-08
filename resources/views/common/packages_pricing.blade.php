@if (Request::url() === ('https://digizel.com/services/web-design-development') || Request::url() === ('https://digizel.com/pricing') || Request::url() === ('https://digizel.com'))
    <div class="tab-pane fade show active" id="pills-home3" role="tabpanel" aria-labelledby="pills-home-tab3">
                    <div class="row">
                        <div class="col-lg-4 ">
                            <div class="pricing-table">
                                <h2>Basic</h2>
                                <p><span>$690.00</span></p>
                                <p><b>$340</b></p>
                                <!-- <p class="pricing-p1">Suitable for a personal blog or
                                    website</p> -->
                                <ul>
                                    <li>4 Unique Pages Design </li>
                                    <li>1 Basic Contact / Inquiry Form</li>
                                    <li>Cross Browser Compatibility</li>
                                    <li>Complete W3C Certified HTML</li>
                                    <li>FREE 3 Stock Photos</li>
                                    <li>FREE Google Friendly Sitemap</li>
                                    <li>100% Unique Design Guarantee</li>
                                </ul>
                                <div class="pricing-btn pricing-btn-blue">
                                    <form  action="{{ url('paynow') }}" method="post">
                                        @csrf
                                    <input type="hidden" name="hdnamount" value="340">
                                    <input type="hidden" name="hdnpackagename" value="Basic">
                                    <input type="hidden" name="hdnpackagedetails" value="4 Unique Pages Design,1 Basic Contact / Inquiry Form,Cross Browser Compatibility,Complete W3C Certified HTML,FREE 3 Stock Photos,FREE Google Friendly Sitemap,100% Unique Design Guarantee">
                                    <button type="submit" class=" order-btn before-btn header-btn hero-pkg-btn site-button site-angle"><p>
                                            Order Now &nbsp; &nbsp;<i class="fas fa-angle-up"></i>
                                        </p></button>
                                    </form>
                                    <!-- <a href="https://digizel.com/pricing"
                                       class=" order-btn before-btn header-btn hero-pkg-btn site-button site-angle"><p>
                                            Order Now &nbsp; &nbsp;<i class="fas fa-angle-up"></i>
                                        </p></a> --></div>
                                <p class="pricing-bottum"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 ">
                            <div class="pricing-table pricing-table-blue">
                                <h2>Professional</h2>
                                <p><span>$1,388.00</span></p>
                                <p><b>$689</b></p>
                                <!-- <p class="pricing-p1">Suitable for a personal blog or
                                    website</p> -->
                                <ul>
                                    <li>6 Unique Pages Design</li>
                                    <li>1 Basic Contact / Inquiry Form </li>
                                    <li>Responsive (Mobile / Tablet)</li>
                                    <li>Cross Browser Compatibility</li>
                                    <li>FREE 5 Stock Photos</li>
                                    <li>FREE Google Friendly Sitemap</li>
                                    <li>100% Unique Design Guarantee</li>
                                </ul>
                                <div class="pricing-btn ">
                                    <form  action="{{ url('paynow') }}" method="post">
                                        @csrf
                                    <input type="hidden" name="hdnamount" value="689">
                                    <input type="hidden" name="hdnpackagename" value="Professional">
                                    <input type="hidden" name="hdnpackagedetails" value="6 Unique Pages Design,1 Basic Contact / Inquiry Form,Responsive (Mobile / Tablet),Cross Browser Compatibility,FREE 5 Stock Photos,FREE Google Friendly Sitemap,100% Unique Design Guarantee">
                                    <button type="submit" class=" order-btn before-btn header-btn hero-pkg-btn site-button site-angle"><p>
                                            Order Now &nbsp; &nbsp;<i class="fas fa-angle-up"></i>
                                        </p></button>
                                    </form>
                                    <!-- <a href="https://digizel.com/pricing" class="header-btn hero-pkg-btn site-button site-angle"><p>Order Now
                                            &nbsp;  <img src="{{asset('public/assets/img/imgpshblue.png')}}" alt="icon">
                                        </p></a> --></div>
                                <p class="pricing-bottum"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 ">
                            <div class="pricing-table">
                                <h2>Premium</h2>
                                <p><span>$1,588.00</span></p>
                                <p><b>$949</b></p>
                                <!-- <p class="pricing-p1">Suitable for a personal blog or
                                    website</p> -->
                                <ul>
                                    <li>48 to 72 hours TAT</li>
                                    <li>Complete Deployment</li>
                                    <li>100% Satisfaction Guarantee</li> 
                                
                                    <li>12 Unique Pages Designs </li>
                                    <li>1 Basic Contact / Inquiry Form </li>
                                    <li>Responsive (Mobile / Tablet)</li>
                                    <li>Cross Browser Compatibility </li>
                                    <li>Custom Design - Exclusive Rights </li>
                                    <li>Complete W3C Certified HTML </li>
                                    <li>FREE 10 Stock Photos</li>
                                    <li>FREE Google Friendly Sitemap</li>
                                    <li>100% Unique Design Guarantee </li>
                                </ul>
                                <div class="pricing-btn pricing-btn-blue">
                                    <form  action="{{ url('paynow') }}" method="post">
                                        @csrf
                                    <input type="hidden" name="hdnamount" value="789">
                                    <input type="hidden" name="hdnpackagename" value="Premium">
                                    <input type="hidden" name="hdnpackagedetails" value="12 Unique Pages Designs,1 Basic Contact / Inquiry Form,Responsive (Mobile / Tablet),Cross Browser Compatibility,Custom Design - Exclusive Rights,Complete W3C Certified HTML,FREE 10 Stock Photos,FREE Google Friendly Sitemap,FREE 3 Months Trial Web Hosting,FREE 3 Months Trial Domain,FREE 5GB Web Hosting Space,FREE 10 Email Accounts,100% Unique Design Guarantee ">
                                    <button type="submit" class=" order-btn before-btn header-btn hero-pkg-btn site-button site-angle"><p>
                                            Order Now &nbsp; &nbsp;<i class="fas fa-angle-up"></i>
                                        </p></button>
                                    </form>
                                    <!-- <a href="https://digizel.com/pricing"
                                       class=" order-btn before-btn header-btn hero-pkg-btn site-button site-angle"><p>
                                            Order Now &nbsp; &nbsp; <i class="fas fa-angle-up"></i>
                                        </p></a> --></div>
                                <p class="pricing-bottum"></p>
                            </div>
                        </div>

                    </div>
                </div>
                @endif
                @if (Request::url() === ('https://digizel.com/services/mobile-application-development') || Request::url() === ('https://digizel.com/pricing') || Request::url() === ('https://digizel.com'))
                @if (Request::url() === ('https://digizel.com/services/mobile-application-development'))
                <div class="tab-pane fade show active" id="pills-home3" role="tabpanel" aria-labelledby="pills-home-tab3">
                @else
                <div class="tab-pane fade" id="pills-profile4" role="tabpanel" aria-labelledby="pills-profile-tab4">
                @endif
                    <div class="row">
                        <div class="col-lg-4 ">
                            <div class="pricing-table">
                                <h2>Basic</h2>
                             
                                <p><b>Features</b></p>
                                <!-- <p class="pricing-p1">Suitable for a test mobile app.</p> -->
                                <ul>
                                    <li>One Time Fee</li>
                    <li>Android &amp; iOS App</li>
                    <li>Interactive User End Experience</li>
                    <li>Trendy User Interface</li>
                    <li>User Friendly Interface</li>
                    <li>Live Database Sync</li>
                    <li>Categories</li>
                    <li>Product Catalog</li>
                    <li>Shopping Cart</li>
                    <li>Shipping Method</li>
                    <li>COD/Bank Transfer/Payment Gateway</li>
                    <li>Checkout</li>

                                </ul>
                                <div class="pricing-btn pricing-btn-blue">
                                    <a href="tel:(866) 313-1877"
                                       class=" order-btn before-btn header-btn hero-pkg-btn site-button site-angle"><p>
                                            Call Now &nbsp; &nbsp; <i class="fas fa-angle-up"></i>
                                        </p></a></div>
                                <p class="pricing-bottum"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 ">
                            <div class="pricing-table pricing-table-blue">
                                <h2>Professional</h2>
                               
                                <p><b>Features</b></p>
                                <!-- <p class="pricing-p1">Suitable for a personal blog or
                                    website</p> -->
                                <ul>
                                     <li>One Time Fee</li>
                    <li>Android &amp; iOS App</li>
                    <li>Interactive User End Experience</li>
                    <li>Trendy User Interface</li>
                    <li>User Friendly Interface</li>
                    <li>Live Database Sync</li>
                    <li>Categories</li>
                    <li>Product Catalog</li>
                    <li>Shopping Cart</li>
                    <li>Shipping Method</li>
                    <li>COD/Bank Transfer/Payment Gateway</li>
                    <li>Checkout</li>
                    <li>Pincode Check</li>
                    <li>Advanced Filters</li>
                    <li>Custom Options in Product List</li>
                    <li>Quantity +/- in Home/Product Page</li>
                    <li>Live Price Change</li>
                    <li>Delivery Slot</li>

                                </ul>
                                <div class="pricing-btn ">
                                    <a href="tel:(866) 313-1877" class="header-btn hero-pkg-btn site-button site-angle"><p>Call Now
                                            &nbsp; <img src="{{asset('public/assets/img/imgpshblue.png')}}" alt="icon">
                                        </p></a></div>
                                <p class="pricing-bottum"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 ">
                            <div class="pricing-table">
                                <h2>Enterprise</h2>
                            
                                 <p><b>Features</b></p>
                                <!-- <p class="pricing-p1">Suitable for a personal blog or
                                    website</p> -->
                                <ul>
                     <li>One Time Fee</li>
                    <li>Android &amp; iOS App</li>
                    <li>Interactive User End Experience</li>
                    <li>Trendy User Interface</li>
                    <li>User Friendly Interface</li>
                    <li>Live Database Sync</li>
                    <li>Latest News</li>
                    <li>Recent Activities</li>
                    <li>Members</li>
                    <li>Groups</li>
                    <li>Departments</li>
                    <li>Discussions</li>

                                </ul>
                                <div class="pricing-btn pricing-btn-blue">
                                    <a href="tel:(866) 313-1877"
                                       class=" order-btn before-btn header-btn hero-pkg-btn site-button site-angle"><p>
                                            Call Now &nbsp; &nbsp; <i class="fas fa-angle-up"></i>
                                        </p></a></div>
                                <p class="pricing-bottum"></p>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if (Request::url() === ('https://digizel.com/services/branding-design') || Request::url() === ('https://digizel.com/pricing') || Request::url() === ('https://digizel.com'))
                @if (Request::url() === ('https://digizel.com/services/branding-design'))
                <div class="tab-pane fade show active" id="pills-home3" role="tabpanel" aria-labelledby="pills-home-tab3">
                @else
                <div class="tab-pane fade" id="pills-contact5" role="tabpanel" aria-labelledby="pills-contact-tab5">
                @endif
                    <div class="row">
                        <div class="col-lg-4 ">
                            <div class="pricing-table">
                                <h2>Budget</h2>
                                <p><span>$1740.00</span></p>
                                <p><b>$340 </b></p>
                                <!-- <p class="pricing-p1">Hassle Free Design</p> -->
                                <ul>
                                    <li>1 Stationery Design Set Concepts</li>
                                    <li>1 Flyer Design</li>
                                    <li>1 Banner Design Concept (Any Size)</li>
                                    <li>1 Brochure Design (Bi-Fold/Tri-Fold)</li>
                                    <li>2 Stock Photos</li>
                                    <li>T-Shirt Design (2 Concepts)</li>
                                </ul>
                                <div class="pricing-btn pricing-btn-blue">
                                     <form  action="{{ url('paynow') }}" method="post">
                                        @csrf
                                    <input type="hidden" name="hdnamount" value="340">
                                    <input type="hidden" name="hdnpackagename" value="Budget">
                                    <input type="hidden" name="hdnpackagedetails" value="1 Stationery Design Set Concepts,1 Flyer Design,1 Banner Design Concept (Any Size),1 Brochure Design (Bi-Fold/Tri-Fold),2 Stock Photos,T-Shirt Design (2 Concepts)">
                                    <button type="submit" class=" order-btn before-btn header-btn hero-pkg-btn site-button site-angle"><p>
                                            Order Now &nbsp; &nbsp;<i class="fas fa-angle-up"></i>
                                        </p></button>
                                    </form></div>
                                <p class="pricing-bottum"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 ">
                            <div class="pricing-table pricing-table-blue">
                                <h2>Best Seller</h2>
                                <p><span>$2490.00</span></p>
                                <p><b>$490 </b></p>
                                <!-- <p class="pricing-p1">Smart design Solution</p> -->
                                <ul>
                                    <li>2 Stationery Design Set Concepts</li>
                                    <li>2 Flyer Design</li>
                                    <li>2 Banner Design Concept (Any Size)</li>
                                    <li>2 Brochure Design Concept (Bi-Fold/Tri-Fold)</li>
                                    <li>4 Stock Photos</li>
                                </ul>
                                <div class="pricing-btn ">
                                     <form  action="{{ url('paynow') }}" method="post">
                                        @csrf
                                    <input type="hidden" name="hdnamount" value="490">
                                    <input type="hidden" name="hdnpackagename" value="Best Seller">
                                    <input type="hidden" name="hdnpackagedetails" value="2 Stationery Design Set Concepts,2 Flyer Design,2 Banner Design Concept (Any Size),2 Brochure Design Concept (Bi-Fold/Tri-Fold),4 Stock Photos">
                                    <button type="submit" class=" order-btn before-btn header-btn hero-pkg-btn site-button site-angle"><p>
                                            Order Now &nbsp; &nbsp;<i class="fas fa-angle-up"></i>
                                        </p></button>
                                    </form></div>
                                <p class="pricing-bottum"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 ">
                            <div class="pricing-table">
                                <h2>The Ultimate</h2>
                                <p><span>$3240.00</span></p>
                                <p><b>$640 </b></p>
                                <!-- <p class="pricing-p1">Cutting-edge Design Solution</p> -->
                                <ul>
                                    <li>4 Stationery Design Set Concepts</li>
                                    <li>3 Flyer Design</li>
                                    <li>3 Banner Design Concept (Any Size)</li>
                                    <li>4 Brochure Design Concept (Bi-Fold/Tri-Fold)</li>
                                    <li>5 Stock Photos</li>
                                </ul>
                                <div class="pricing-btn pricing-btn-blue">
                                    <form  action="{{ url('paynow') }}" method="post">
                                        @csrf
                                    <input type="hidden" name="hdnamount" value="640">
                                    <input type="hidden" name="hdnpackagename" value="The Ultimate">
                                    <input type="hidden" name="hdnpackagedetails" value="4 Stationery Design Set Concepts,3 Flyer Design,3 Banner Design Concept (Any Size),4 Brochure Design Concept (Bi-Fold/Tri-Fold),5 Stock Photos">
                                    <button type="submit" class=" order-btn before-btn header-btn hero-pkg-btn site-button site-angle"><p>
                                            Order Now &nbsp; &nbsp;<i class="fas fa-angle-up"></i>
                                        </p></button>
                                    </form></div>
                                <p class="pricing-bottum"></p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="tab-pane fade" id="pills-contact6" role="tabpanel" aria-labelledby="pills-contact-tab6">
                    <div class="row">
                        <div class="col-lg-4 ">
                            <div class="pricing-table">
                                <h2>Basic</h2>
                                <p><span>$80.00</span></p>
                                <p><b>$35</b></p>
                                <!-- <p class="pricing-p1">Suitable for a personal blog or
                                    website</p> -->
                                <ul>
                                    <li> 3 Logo concepts </li>
                                    <li> 2 Revisions </li>
                                    <li> 100% Ownership Rights </li>
                                    <li> Dedicated Designer Support </li>
                                    <li> FREE icon design (JPEG FORMATS) </li>
                                    <li> Get Initial Concepts within 48 hours </li> 
                                    <li> 24 X 7 Customer Support  </li> 
                                    <li> Dedicated Account Executive </li> 
                                </ul>
                                <div class="pricing-btn pricing-btn-blue">
                                    <form  action="{{ url('paynow') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="hdnamount" value="35">
                                    <input type="hidden" name="hdnpackagename" value="Basic">
                                    <input type="hidden" name="hdnpackagedetails" value="3 Logo concepts,2 Revisions,100% Ownership Rights,Dedicated Designer Support,FREE icon design (JPEG FORMATS),Get Initial Concepts within 48 hours,24 X 7 Customer Support,Dedicated Account Executive ">
                                    <button type="submit" class=" order-btn before-btn header-btn hero-pkg-btn site-button site-angle"><p>
                                            Order Now &nbsp; &nbsp;<i class="fas fa-angle-up"></i>
                                        </p></button>
                                    </form></div>
                                <p class="pricing-bottum"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 ">
                            <div class="pricing-table pricing-table-blue">
                                <h2>Standard </h2>
                                <p><span>$228.00</span></p>
                                <p><b>$109</b></p>
                                <!-- <p class="pricing-p1">Suitable for a personal blog or
                                    website</p> -->
                                <ul>
                                    <li>6 Logo concepts</li>
                                    <li>8 Revisions </li>
                                    <li>100% Ownership Rights </li>
                                    <li>Stationery Design (BUSINESS CARD LETTERHEAD, and ENVELOPE) </li>
                                    <li>FREE icon design (AI, PSD, EPS, GIF, BMP, JPEG, PNG FORMATS) </li>
                                    <li>Get Initial Concepts within 48 hours </li>
                                    <li>24 X 7 Customer Support </li>
                                    <li>Dedicated Account Executive </li> 
                                </ul>
                                <div class="pricing-btn ">
                                    <form  action="{{ url('paynow') }}" method="post">
                                        @csrf
                                    <input type="hidden" name="hdnamount" value="109">
                                    <input type="hidden" name="hdnpackagename" value="Standard">
                                    <input type="hidden" name="hdnpackagedetails" value="6 Logo concepts,8 Revisions,100% Ownership Rights,Stationery Design (BUSINESS CARD LETTERHEAD, and ENVELOPE),FREE icon design (AI, PSD, EPS, GIF, BMP, JPEG, PNG FORMATS),Get Initial Concepts within 48 hours,24 X 7 Customer Support,Dedicated Account Executive ">
                                    <button type="submit" class=" order-btn before-btn header-btn hero-pkg-btn site-button site-angle"><p>
                                            Order Now &nbsp; &nbsp;<i class="fas fa-angle-up"></i>
                                        </p></button>
                                    </form></div>
                                <p class="pricing-bottum"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 ">
                            <div class="pricing-table">
                                <h2>Professional</h2>
                                <p><span>$799.00</span></p>
                                <p><b>$199 </b></p>
                                <!-- <p class="pricing-p1">Suitable for a personal blog or
                                    website</p> -->
                                <ul>
                                    <li>Unlimited Logo Design Concepts</li>
                                    <li>Unlimited Revisions </li>
                                    <li>100% Ownership Rights </li>
                                    <li>Stationery Design (BUSINESS CARD, LETTERHEAD, and ENVELOPE) </li>
                                    <li>FREE icon design (AI, PSD, EPS, GIF, BMP, JPEG, PNG FORMATS) </li>  
                                    <li>Get Initial Concepts within 48 hours </li>  
                                    <li>24 X 7 Customer Support </li>  
                                    <li>Dedicated Account Executive </li>  

                                </ul>
                                <div class="pricing-btn pricing-btn-blue">
                                    <form  action="{{ url('paynow') }}" method="post">
                                        @csrf
                                    <input type="hidden" name="hdnamount" value="199">
                                    <input type="hidden" name="hdnpackagename" value="Professional">
                                    <input type="hidden" name="hdnpackagedetails" value="Unlimited Logo Design Concepts,Unlimited Revisions,100% Ownership Rights,Stationery Design (BUSINESS CARD, LETTERHEAD, and ENVELOPE),FREE icon design (AI, PSD, EPS, GIF, BMP, JPEG, PNG FORMATS),Get Initial Concepts within 48 hours,24 X 7 Customer Support,Dedicated Account Executive">
                                    <button type="submit" class=" order-btn before-btn header-btn hero-pkg-btn site-button site-angle"><p>
                                            Order Now &nbsp; &nbsp;<i class="fas fa-angle-up"></i>
                                        </p></button>
                                    </form></div>
                                <p class="pricing-bottum"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 ">
                            <div class="pricing-table">
                                <h2>Mascot/3D Silver</h2>
                                <p><span>$700-USD</span></p>
                                <p><b>$350 </b></p>
                                <ul>
                                    <li>1 Mascot/3D Logo Concept </li>
                                    <li>10 Revisions </li>
                                    <li>Hand drawn Sketch </li>
                                    <li>100% Ownership Rights </li>
                                    <li>Presentation on mockup </li>  
                                    <li>48-72 Hours turnaround time </li>  
                                    <li>Revision time Delivery (24 hours) </li>  
                                    <li>File Format: AI, PNG, PSD, JPEG, TIFF, and PDF </li>  
                                </ul>
                                <div class="pricing-btn pricing-btn-blue">
                                    <form  action="{{ url('paynow') }}" method="post">
                                        @csrf
                                    <input type="hidden" name="hdnamount" value="350">
                                    <input type="hidden" name="hdnpackagename" value="Mascot/3D Silver">
                                    <input type="hidden" name="hdnpackagedetails" value="1 Mascot/3D Logo Concept,10 Revisions,Hand drawn Sketch,100% Ownership Rights,Presentation on mockup,48-72 Hours turnaround time,Revision time Delivery (24 hours),File Format: AI, PNG, PSD, JPEG, TIFF, and PDF">
                                    <button type="submit" class=" order-btn before-btn header-btn hero-pkg-btn site-button site-angle"><p>
                                            Order Now &nbsp; &nbsp;<i class="fas fa-angle-up"></i>
                                        </p></button>
                                    </form></div>
                                <p class="pricing-bottum"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 ">
                            <div class="pricing-table">
                                <h2>Mascot/3D Gold</h2>
                                <p><span>$1000-USD</span></p>
                                <p><b>$500 </b></p>
                                <ul>
                                    <li> 2 Mascot/3D Logo Concept </li>
                                    <li> Unlimited Revisions </li>
                                    <li> Hand drawn Sketch </li>
                                    <li> 100% Ownership Rights </li>  
                                    <li> Presentation on mockup </li>  
                                    <li> 48-72 Hours turnaround time </li>  
                                    <li> Revision time Delivery (24 hours) </li>  
                                    <li> File Format: AI, PNG, PSD, JPEG, TIFF, and PDF </li>
                                </ul>
                                <div class="pricing-btn pricing-btn-blue">
                                    <form  action="{{ url('paynow') }}" method="post">
                                        @csrf
                                    <input type="hidden" name="hdnamount" value="500">
                                    <input type="hidden" name="hdnpackagename" value="Mascot/3D Gold">
                                    <input type="hidden" name="hdnpackagedetails" value="2 Mascot/3D Logo Concept,Unlimited Revisions,Hand drawn Sketch,100% Ownership Rights,Presentation on mockup,48-72 Hours turnaround time,Revision time Delivery (24 hours),File Format: AI, PNG, PSD, JPEG, TIFF, and PDF">
                                    <button type="submit" class=" order-btn before-btn header-btn hero-pkg-btn site-button site-angle"><p>
                                            Order Now &nbsp; &nbsp;<i class="fas fa-angle-up"></i>
                                        </p></button>
                                    </form></div>
                                <p class="pricing-bottum"></p>
                            </div>
                        </div>
                    </div>
                </div>
                @endif