

<header>
    <div class="header-logo">
        <a href="{{url('/')}}"> <img src="{{Voyager::image(setting('site.logo'))}}" alt="logo"></a>
    </div>
    <div id="mySidenav" class="sidenav">

        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        {{menu('header')}}
        
        <a href="tel: {{setting('site.phone')}} " class="mobile  header-call site-button top-header-btn"> <p><b> {{setting('site.phone')}} <img src="{{asset('public/assets/img/ICO arrow.svg')}}" alt="icon"> </b>
            </p></a>
        <a href="" class="mobile requ-btn header-call site-button top-header-btn "  data-bs-toggle="modal" data-bs-target="#staticBackdrop" > <p><b> Request a Quote <img src="{{asset('public/assets/img/rocket.svg')}}" alt="icon"></b>
            </p></a>
    </div>

    <span class="hameburger-menu" onclick="openNav()"><i class="hameburger fa fa-bars" aria-hidden="true"></i></span>
    <div class="header-btn">
        <div class="header-call-btn">
            <a href="tel: {{setting('site.phone')}}" class="header-call site-button top-header-btn"> <p><b> {{setting('site.phone')}}  &nbsp; <img src="{{asset('public/assets/img/ICO arrow.svg')}}" alt="icon"> </b>
                </p></a>
        </div>
        <div class= "header-contact-btn">
            <a href="#" class="header-call site-button "  data-bs-toggle="modal" data-bs-target="#staticBackdrop" > <p><b> Request a Quote <img src="{{asset('public/assets/img/rocket.svg')}}" alt="icon"></b>
                </p></a>
        </div>
    </div>
</header>
