@php
    $app_local  = get_default_language_code();
    $slug = Illuminate\Support\Str::slug(App\Constants\SiteSectionConst::BANNER_SECTION);
    $banner = App\Models\Admin\SiteSections::getData($slug)->first();
@endphp
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Banner
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="banner-section player" id="bgndVideo"  data-property="{videoURL:'{{ @$banner->value->video_link }}',containment:'body',autoPlay:true, mute:true, startAt:0, showYTLogo: false, showControls: false, opacity:1}">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-xl-7">
                <div class="banner-content">
                    <h1 class="title">{{ @$banner->value->language->$app_local->heading }}</h1>
                    <p>{{ @$banner->value->language->$app_local->sub_heading }}</p>
                    <div class="banner-btn-area">
                        <a href="image-g.html" class="btn--base style">{{ @$banner->value->language->$app_local->first_button_name }} <i class="las la-angle-right"></i></a>
                        <a href="chat.html" class="btn--base active">{{ @$banner->value->language->$app_local->second_button_name }} <i class="las la-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Banner
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->