<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Footer
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<footer class="footer-section pt-60">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6">
                <div class="subscribe-wrapper">
                    <div class="subscribe-content">
                        <h3 class="title">{{ __("Subscribe to Newsletter!") }}</h3>
                        <div class="input-area">
                            <input type="email" name="email" placeholder="{{ __("Enter your email") }}:">
                            <button class="btn--base" type="submit">{{ __("Subscribe") }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-30-none">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-30">
                <div class="footer-widget">
                    <div class="footer-logo">
                        <a class="site-logo site-title" href="{{ setRoute('frontend.index') }}"><img src="{{ get_logo($basic_settings) }}" alt="site-logo"></a>
                    </div>
                    <p>GPT-4 can solve difficult problems with greater accuracy, thanks to its broader general knowledge</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-30">
                <div class="footer-widget">
                    <h4 class="title">{{ __("CONTACT") }}</h4>
                    <ul class="footer-list">
                        <li><a href="tel:1111000000">+8801111000000</a></li>
                        <li><a href="#0">support@appdevs.net</a></li>
                        <li><a href="https://www.skype.com/en/" target="_blank">Skype</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-30">
                <div class="footer-widget">
                    <h4 class="title">{{ __("USEFULL LINKS") }}</h4>
                    <ul class="footer-list">
                        <li><a href="#0">Privacy Policy</a></li>
                        <li><a href="#0">Terms & Condition</a></li>
                        <li><a href="#0">Refund Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                <div class="footer-widget">
                    <h4 class="title">{{ __("DOWNLOAD APP") }}</h4>
                    <ul class="footer-list">
                        <li><a href="#0">
                            <img src="{{ asset('public/frontend') }}/images/app/play_store.png" alt="google">
                        </a></li>
                        <li><a href="#0">
                            <img src="{{ asset('public/frontend') }}/images/app/app_store.png" alt="apple">
                        </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrapper">
        <div class="container">
            <div class="copyright-area">
                <p>{{ __("Copyright") }} © 2024 <a href="#0" class="text--base">{{ $basic_settings->site_name }}</a>. {{ __("All Rights Reserved.") }}</a></p>
                <div class="social-area">
                    <ul class="footer-social pb-10">
                        <li><a href="#0"><i class="lab la-facebook-f"></i></a></li>
                        <li><a href="#0"><i class="lab la-linkedin-in"></i></a></li>
                        <li><a href="#0"><i class="lab la-github"></i></a></li>
                        <li><a href="#0">
                            <svg height="20" viewBox="-34.32047659 -70.74 659.48047659 705.28041072" width="20" xmlns="http://www.w3.org/2000/svg"><path d="m467 26.32c-82.74-97.06-350.5 90.93-348.33 333.27-.02 1.48-.33 2.93-.91 4.29a11.39 11.39 0 0 1 -2.44 3.62 11.19 11.19 0 0 1 -3.63 2.45c-1.35.58-2.8.89-4.27.91-.98-.01-1.94-.14-2.88-.4-.94-.25-1.84-.63-2.68-1.11s-1.62-1.07-2.32-1.75c-.69-.68-1.3-1.44-1.8-2.27-6.8-14.83-12.2-30.26-16.11-46.1s-6.32-32.01-7.19-48.3c-.88-16.29-.22-32.63 1.97-48.8 2.18-16.16 5.89-32.09 11.06-47.56.78-2.29.74-4.78-.12-7.05a10.45 10.45 0 0 0 -11.49-6.65c-2.38.4-4.56 1.6-6.16 3.42-11.03 11.77-20.93 24.56-29.57 38.19s-15.97 28.04-21.91 43.05a258.192 258.192 0 0 0 -13.47 46.39 257.972 257.972 0 0 0 -4.56 48.1c-.39 34.25 6.05 68.23 18.96 99.95a256.996 256.996 0 0 0 56.21 84.74 256.804 256.804 0 0 0 84.66 56.28 256.458 256.458 0 0 0 99.84 18.97c365.3-8.3 280.99-487.06 207.14-573.64z"/></svg></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Footer
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->