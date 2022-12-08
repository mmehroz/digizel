<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">





<div id ="left-sideform" >
<div class="icon-bar">
  <a href="mailto:contact@digizel.com" class="comment"> <span>  Chat With Us  </span> <i class="fas fa-comment"></i></a> 
</div>  


<div class="icon-bar icon-bar-p">
  <a href="tel:(866) 313-1877" class="phone"><span>(866) 313-1877 </span> <i class="fa fa-phone" aria-hidden="true"></i></a> 
</div>  

<div class="left-form">
    <section id="sidebar-form">
        <p>Set a meeting with our professionals or call us today to discuss your 
        project with our team of industry-proven professionals</p>

       <form method="post" id="side-bar" action="{{route('sidebar.form')}}">

                        @csrf

                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-success d-none" id="pos_msg_div">
                                    <span id="pos_res_message"></span>
                                </div>
                            </div>
                        </div>

                        <input type="text" name="full_name" placeholder="Full Name" >


                        <input type="email" name="email"  placeholder="Email Address" >


                        <input type="phone" name="phone" class="ghost-form-field"
                               placeholder="Phone Number" >

                        <button type="submit" id="sidbar_button" class="">Send Me a Quote <i class="fas fa-angle-up"></i></button>
             </form>
        
    </section>
    
    <button class="form-side-button">Quest A Quote</button>
</div> 
 
 
</div> 
  
<footer>
    
    <div class="footer-widgets">
        <div class="row">
            <div class="col-md-2 footer-col-1">
                <a href="{{url('/')}}"> <img src="{{ asset('public/assets/img/Logo.png')  }}" alt="logo"></a>
            </div>

            <div class="col-md-4 footer-col-2">
                <p class="margin-footer">All content ©️ {{date('Y')}} digizel. </p>
                <p>Call Toll Free: <a href="tel:{{setting('site.phone')}}"><b>{{setting('site.phone')}}</b></p> </a>
                <p class="blue-footer"><a href="https://digizel.com/privacypolicy">Privacy Policy</a> & <a href="https://digizel.com/termsofservice">Terms of Use</a> &nbsp; &nbsp; <a href="#">Sitemap</a></p>
                <p>
                    <a href="{{setting('site.facebook')}}" target="_blank">  <i class="fab fa-facebook-f"></i></a>
                    <a href="{{setting('site.linkedin')}}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a href="{{setting('site.twitter')}}" target="_blank"> <i class="fab fa-twitter"></i></a>
                    
            </div>

            <div class="col-md-2 footer-col-3">
                <h3>Services</h3>
                {{ menu('footer services') }}
                {{--<ul>
                    <li><a href="services-branding-design.html">Branding Design </a></li>
                    <li><a href="services-web-design-development.html">Web Design & Development </a></li>
                    <li><a href="services-mobile-application-development.html"> Mobile Solutions </a></li>
                    <li><a href="services-Ecommerce-solutions.html"> Ecommerce Solutions </a></li>
                    <li><a href="services-digital-marketing.html"> Digital Marketing</a></li>
                </ul>--}}
            </div>


            <div class="col-md-2 footer-col-4">
                <h3>Company</h3>


                {{ menu('Company') }}

                {{--<ul>
                    <li><a href="about.html"> About Us </a></li>

                    <li><a href="services.html"> Services </a></li>
                    <li><a href="pricing.html"> Pricing </a></li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                </ul>--}}
            </div>

            <div class="col-md-2 footer-col-5">
                <h3> Knowledge Base</h3>
                {{menu('Knowledge Base')}}
                {{--<ul>
                    <li><a href="services-web-design-development.html"> Web Development </a></li>
                    <li><a href="#"> Content Marketing </a></li>
                    <li><a href="services-mobile-application-development.html"> Mobile Development </a></li>
                    <li><a href="#"> Web Design </a></li>
                    <li><a href="#"> SEO </a></li>
                    <li><a href="#"> PPC </a></li>
                    <li><a href="#"> Amazon </a></li>
                </ul>--}}
            </div>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop"  tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">


                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">  </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" id="quote_form" action="{{route('quote.form')}}">

                        @csrf

                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-success d-none" id="pop_msg_div">
                                    <span id="pop_res_message"></span>
                                </div>
                            </div>
                        </div>

                        <input type="text" name="full_name" placeholder="Full Name" >


                        <input type="email" name="email"  placeholder="Email Address" >


                        <input type="phone" name="phone" class="ghost-form-field"
                               placeholder="Phone Number" >


                        <button type="submit" id="quote_button" class="">Send Me a Quote <i class="fas fa-angle-up"></i></button>

                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Slick Slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Optional JavaScript; choose one of the two! Slick Slider  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
            crossorigin="anonymous"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <script src="{{asset('public/assets/js/script.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vivus/0.4.5/vivus.min.js"
            integrity="sha512-NBLGIjYyAoYAr23l+dmAcUv7TvFj0XrqZoFa4i1o+F2VvF9SrERyMD8BHNnJn1SEGjl1AouBDcCv/q52L3ozBQ=="
            crossorigin="anonymous"></script>
    <script>

        new Vivus('svg-castle',
            {duration: 100, type: 'oneByOne'},
            after
        );


        function after() {
            fillPath('color-1', '#695a69');
            fillPath('color-2', '#b2441d');
            fillPath('color-3', '#dfd0c6');
            fillPath('color-4', '#c8b2a8');
            fillPath('color-5', '#de582a');
            fillPath('color-6', '#a08a8a')
        }

        function fillPath(classname, color) {
            const paths = document.querySelectorAll(`#svg-castle .${classname}`);
            for (path of paths) {
                path.style.fill = `${color}`;
            }
        }
    </script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>

    <script>

        setTimeout(function(){
            $('.success_message').hide();
        },5000);

    </script>


  <!-- side-bar Form -->
    <script>
        if ($("#side-bar").length > 0) {
            $("#side-bar").validate({

                rules: {
                    full_name: {
                        required: true,
                        maxlength: 50
                    },
                    email: {
                        required: true
                    },
                    phone: {
                        required: true
                    }
                },
                messages: {
                    full_name: {
                        required: "Please Enter Full Name",
                        maxlength: "Your last name maxlength should be 50 characters long."
                    },
                    email: {
                        required: "Please Enter Email Address"
                    },
                    phone: {
                        required: "Please Enter Phone Number"
                    }
                },
                submitHandler: function(form) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $('#sidbar_button').html('Sending..');
                    $.ajax({
                        url: '/quote-form' ,
                        type: "POST",
                        data: $('#side-bar').serialize(),
                        success: function( response ) {

                            $('#sidbar_button').html('Send Me a Quote');
                            $('#pos_res_message').show();
                            $('#pos_res_message').html(response.msg);
                            $('#pos_msg_div').removeClass('d-none');

                            document.getElementById("side-bar").reset();

                            setTimeout(function(){
                                $('#pop_res_message').hide();
                                $('#pos_msg_div').hide();
                            },5000);
                        }
                    });
                }
            })
        }
    </script>



    <!-- Quote Form -->
    <script>
        if ($("#quote_form").length > 0) {
            $("#quote_form").validate({

                rules: {
                    full_name: {
                        required: true,
                        maxlength: 50
                    },
                    email: {
                        required: true
                    },
                    phone: {
                        required: true
                    }
                },
                messages: {
                    full_name: {
                        required: "Please Enter Full Name",
                        maxlength: "Your last name maxlength should be 50 characters long."
                    },
                    email: {
                        required: "Please Enter Email Address"
                    },
                    phone: {
                        required: "Please Enter Phone Number"
                    }
                },
                submitHandler: function(form) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $('#quote_button').html('Sending..');
                    $.ajax({
                        url: '/quote-form' ,
                        type: "POST",
                        data: $('#quote_form').serialize(),
                        success: function( response ) {

                            $('#quote_button').html('Send Me a Quote');
                            $('#pop_res_message').show();
                            $('#pop_res_message').html(response.msg);
                            $('#pop_msg_div').removeClass('d-none');

                            document.getElementById("quote_form").reset();

                            setTimeout(function(){
                                $('#pop_res_message').hide();
                                $('#pop_msg_div').hide();
                            },5000);
                        }
                    });
                }
            })
        }
    </script>

    <!-- Package Form -->
    <script>
        if ($("#package_form").length > 0) {
            $("#package_form").validate({

                rules: {
                    "package_name[]": {
                        required: true,
                        minlength: 1
                    }
                },
                messages: {
                    "package_name[]": {
                        required: "Please Select a Package",
                        minlength: "Please select at least one package"
                    }
                },
                submitHandler: function(form) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $('#package_button').html('Sending..');
                    $.ajax({
                        url: '/package-form' ,
                        type: "POST",
                        data: $('#package_form').serialize(),
                        success: function( response ) {

                            $('#package_button').html('Order Now');
                            $('#package_res_message').show();
                            $('#package_res_message').html(response.msg);
                            $('#pck_msg_div').removeClass('d-none');

                            document.getElementById("package_form").reset();

                            setTimeout(function(){
                                $('#package_res_message').hide();
                                $('#pck_msg_div').hide();
                            },5000);
                        }
                    });
                }
            })
        }
    </script>

    <!-- Package Form -->
    <script>
        if ($("#expert_form").length > 0) {
            $("#expert_form").validate({

                rules: {
                    "expert_full_name": {
                        required: true
                    },
                    "expert_company_name": {
                        required: true
                    },
                    "expert_email": {
                        required: true
                    },
                    "expert_phone": {
                        required: true
                    },
                    "expert_package": {
                        required: true
                    },
                    "expert_comment": {
                        required: true
                    },
                },
                messages: {
                    "expert_full_name": {
                        required: "This fiel is required",
                    },
                    "expert_company_name": {
                        required: "This fiel is required",
                    },
                    "expert_email": {
                        required: "This fiel is required",
                    },
                    "expert_phone": {
                        required: "This fiel is required",
                    },
                    "expert_package": {
                        required: "This fiel is required",
                    },
                    "expert_comment": {
                        required: "This fiel is required",
                    },
                },
                submitHandler: function(form) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $('#expert_button').html('Sending..');
                    $.ajax({
                        url: '/expert-form' ,
                        type: "POST",
                        data: $('#expert_form').serialize(),
                        success: function( response ) {

                            $('#expert_button').html('Order Now');
                            $('#expert_res_message').show();
                            $('#expert_res_message').html(response.msg);
                            $('#expert_msg_div').removeClass('d-none');

                            document.getElementById("expert_form").reset();

                            setTimeout(function(){
                                $('#expert_res_message').hide();
                                $('#expert_msg_div').hide();
                            },5000);
                        }
                    });
                }
            })
        }
    </script>

<script>
$(document).ready(function(){
  $(".form-side-button").click(function(){
    $("#sidebar-form").toggleClass("main-form");

  });
});
</script>

    <script type="text/javascript">
        $(document).ready(function() {
  var $window = $(window);
  var div2 = $('#left-sideform');
  var div1 = $('header');
  var div1_top = div1.offset().top + 1300;
  var div1_height = div1.height();
  var div1_bottom = div1_top + div1_height;
  console.log(div1_bottom);
  $window.on('scroll', function() {
    var scrollTop = $window.scrollTop();
    var viewport_height = $(window).height();
    var scrollTop_bottom = scrollTop + viewport_height;
    div2.toggleClass('hide', scrollTop_bottom > div1_bottom);
  });
});
    </script>




<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/617864c8f7c0440a59202117/1fiv4jced';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


</footer>
