<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start acount
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="account">
    <div class="account-area">
        <div class="account-wrapper change-form">
            <span class="account-cross-btn"></span>
            <div class="account-logo text-center">
                <a href="{{ setRoute('frontend.index') }}" class="site-logo">
                    <img src="{{ get_logo($basic_settings) }}" alt="logo">
                </a>
            </div>
            <h5 class="title">Login Information</h5>
            <p>Please input your email and password and login to your account to get access to your dashboard.</p>
            <form class="account-form">
                <div class="row ml-b-20">
                    <div class="col-lg-12 form-group">
                        <input type="email" required class="form-control form--control" name="text" placeholder="Email" spellcheck="false" data-ms-editor="true">
                    </div>
                    <div class="col-lg-12 form-group" id="show_hide_password">
                        <input type="password" required class="form-control form--control" name="password" placeholder="Password">
                        <a href="" class="show-pass"><i class="la la-eye-slash" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-lg-12 form-group">
                        <div class="forgot-item">
                            <label><a href="#0">Forgot Password?</a></label>
                        </div>
                    </div>
                    <div class="col-lg-12 form-group text-center">
                        <button type="submit" class="btn--base w-100">Login Now</button>
                    </div>
                    <div class="or-area">
                        <span class="or-line"></span>
                        <span class="or-title">Or</span>
                        <span class="or-line"></span>
                    </div>
                    <div class="col-lg-12 form-group">
                        <div class="account-form-btn">
                            <a href="#0" class="google">
                                <svg viewBox="0 0 24 24" width="18" height="18" class="SvgIcon__SvgIconStyled-sc-1fos6oe-0 hbbopy"><path d="M15.303 8.287l2.26-2.206C16.174 4.791 14.368 4 12.206 4a8 8 0 0 0-7.151 4.412l2.588 2.01c.65-1.93 2.446-3.326 4.563-3.326 1.504 0 2.518.649 3.096 1.191zm4.59 3.897c0-.659-.054-1.139-.17-1.637h-7.516v2.97h4.412c-.089.74-.569 1.851-1.636 2.598l2.526 1.957c1.512-1.396 2.384-3.451 2.384-5.888zm-12.24 1.405a4.928 4.928 0 0 1-.267-1.583c0-.552.098-1.086.258-1.584l-2.588-2.01a8.013 8.013 0 0 0-.854 3.594c0 1.29.311 2.508.854 3.593l2.597-2.01zm4.554 6.422c2.162 0 3.976-.711 5.302-1.939l-2.526-1.957c-.676.472-1.584.8-2.776.8-2.117 0-3.914-1.396-4.554-3.326l-2.588 2.01c1.316 2.615 4.011 4.412 7.142 4.412z"></path></svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12 text-center">
                        <div class="account-item">
                            <label>Don't Have An Account? <a href="#0" class="account-control-btn">Register Now</a></label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="account-wrapper">
            <span class="account-cross-btn"></span>
            <div class="account-logo text-center">
                <a class="site-logo" href="{{ setRoute('frontend.index') }}"><img src="{{ get_logo($basic_settings) }}" alt="logo"></a>
            </div>
            <h5 class="title">Register Information</h5>
            <p>Please input your details and register to your account to get access to your dashboard.</p>
            <form class="account-form">
                <div class="row ml-b-20">
                    <div class="col-lg-12 form-group">
                        <input type="text" class="form-control form--control" name="text" placeholder="First Name" spellcheck="false" data-ms-editor="true">
                    </div>
                    <div class="col-lg-12 form-group">
                        <input type="text" class="form-control form--control" name="text" placeholder="Last Name" spellcheck="false" data-ms-editor="true">
                    </div>
                    <div class="col-lg-12 form-group">
                        <input type="email" class="form-control form--control" name="email" placeholder="Email">
                    </div>
                    <div class="col-lg-12 form-group">
                        <input type="password" class="form-control form--control" name="password" placeholder="Password">
                    </div>
                    <div class="col-lg-12 form-group">
                        <div class="custom-check-group">
                            <input type="checkbox" id="level-1">
                            <label for="level-1">I have agreed with <a href="#0">Terms Of Use &amp; Privacy Policy</a></label>
                        </div>
                    </div>
                    <div class="col-lg-12 form-group text-center">
                        <button type="submit" class="btn--base w-100">Register Now</button>
                    </div>
                    <div class="col-lg-12 text-center">
                        <div class="account-item">
                            <label>Already Have An Account? <a href="#0" class="account-control-btn">Login
                                    Now</a></label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End acount
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->