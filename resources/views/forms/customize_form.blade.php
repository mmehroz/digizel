<form method="post" id="package_form" action="{{route('package.form')}}">

    @csrf

    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success d-none" id="pck_msg_div">
                <span id="package_res_message"></span>
            </div>
        </div>
    </div>

    <ul class="row">
        <li class="col-md-4 col-lg-2">
            <div class="form-check panel-1">
                <input class="form-check-input" name="package_name[]" type="checkbox"
                       value="Default checkbox" id="Default">
                <label class="form-check-label" for="Default">
                    <img src="{{asset('public/assets/img/[ICO] Branding Design.png')}}" alt="icon">
                </label>
            </div>
            <p> Default checkbox</p>
        </li>

        <li class="col-md-4 col-lg-2">
            <div class="form-check panel-2">
                <input class="form-check-input" name="package_name[]" type="checkbox"
                       value="Web Design & Development" id="Development">
                <label class="form-check-label" for="Development">
                    <img src="{{asset('public/assets/img/[ICO] Digital Marketing.png')}}" alt="icon">
                </label>
            </div>
            <p>Web Design & Development</p>
        </li>

        <li class="col-md-4 col-lg-2">
            <div class="form-check panel-3">
                <input class="form-check-input" name="package_name[]" type="checkbox"
                       value="Mobile Solutions" id="Mobile">
                <label class="form-check-label" for="Mobile">
                    <img src="{{asset('public/assets/img/[ICO] Ecommerce Solutions.png')}}" alt="icon">
                </label>

            </div>
            <p>Mobile Solutions </p>
        </li>

        <li class="col-md-4 col-lg-2">
            <div class="form-check panel-4">
                <input class="form-check-input" name="package_name[]" type="checkbox"
                       value="Digital Marketing" id="Digital">
                <label class="form-check-label" for="Digital">
                    <img src="{{asset('public/assets/img/[ICO] Mobile Solutions.png')}}" alt="icon">
                </label>

            </div>
            <p>Digital Marketing</p>
        </li>

        <li class="col-md-4 col-lg-2">
            <div class="form-check panel-5">
                <input class="form-check-input" name="package_name[]" type="checkbox"
                       value="Ecommerce Solutions" id="Ecommerce">
                <label class="form-check-label" for="Ecommerce">
                    <img src="{{asset('public/assets/img/[ICO] Web Design & Development.png')}}" alt="icon">
                </label>
            </div>
            <p>Ecommerce Solutions</p>
        </li>
    </ul>

    <button type="submit" id="package_button"
            class="sub-btn before-btn-ordr before-btn header-btn site-button site-angle">
        Order Now &nbsp; &nbsp; <i class="fas fa-angle-up"></i></button>
</form>
