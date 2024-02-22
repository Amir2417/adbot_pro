@extends('frontend.layouts.master')

@push("css")
    
@endpush

@section('content') 
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Banner
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="banner-section player" id="bgndVideo"  data-property="{videoURL:'https://youtu.be/nh1b6Lq5h20',containment:'body',autoPlay:true, mute:true, startAt:0, showYTLogo: false, showControls: false, opacity:1}">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-xl-7">
                <div class="banner-content">
                    <h1 class="title">GPT-4 is OpenAI’s Most Advanced System</h1>
                    <p>ChatGPT is an artificial intelligence chatbot developed by OpenAI and launched in November 2022. It is built on top of OpenAI/'s GPT-3.5 and GPT-4 families of large language models.</p>
                    <div class="banner-btn-area">
                        <a href="image-g.html" class="btn--base style">IMAGE GENERATE <i class="las la-angle-right"></i></a>
                        <a href="chat.html" class="btn--base active">TEXT GENERATE <i class="las la-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Banner
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start core feature Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="core-feature-section pt-80">
    <div class="container">
        <div class="row justify-content-center mb-30-none">
            <div class="col-lg-3 mb-30">
                <div class="core-feature-item">
                    <div class="thumb">
                        <img src="{{ asset('public/frontend') }}/images/banner/element-6.png" alt="thumb">
                    </div>
                    <h4 class="title">Text Generation</h4>
                </div>
            </div>
            <div class="col-lg-3 mb-30">
                <div class="core-feature-item">
                    <div class="thumb">
                        <img src="{{ asset('public/frontend') }}/images/banner/element-5.png" alt="thumb">
                    </div>
                    <h4 class="title">Programming Help</h4>
                </div>
            </div>
            <div class="col-lg-3 mb-30">
                <div class="core-feature-item">
                    <div class="thumb">
                        <img src="{{ asset('public/frontend') }}/images/banner/element-4.png" alt="thumb">
                    </div>
                    <h4 class="title">Mathematical Queries</h4>
                </div>
            </div>
            <div class="col-lg-3 mb-30">
                <div class="core-feature-item">
                    <div class="thumb">
                        <img src="{{ asset('public/frontend') }}/images/banner/element-7.png" alt="thumb">
                    </div>
                    <h4 class="title">Image Generator</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End core feature Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start work section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="work-section ptb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 text-center">
                <div class="section-header">
                    <span class="section-sub-titel"><i class="las la-robot"></i>  How It's Works</span>
                    <h2 class="section-title">Simply follow the moves toward</h2>
                    <p>Have you ever finally just gave in to the temptation and read your horoscope in the newspaper.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-30-none">
            <div class="col-lg-4 col-md-4 col-sm-6 mb-30">
                <div class="work-item">
                    <div class="thumb-area">
                        <img src="{{ asset('public/frontend') }}/images/how-its-work/add-user.png" alt="statistics-item">
                    </div>
                    <div class="content">
                        <h4>Create an account</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque corrupti dicta omnis tempore.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 mb-30">
                <div class="work-item">
                    <div class="thumb-area">
                        <img src="{{ asset('public/frontend') }}/images/how-its-work/input.png" alt="statistics-item">
                    </div>
                    <div class="content">
                        <h4>Type your Queries</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque corrupti dicta omnis tempore.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 mb-30">
                <div class="work-item">
                    <div class="thumb-area">
                        <img src="{{ asset('public/frontend') }}/images/how-its-work/assistant.png" alt="statistics-item">
                    </div>
                    <div class="content">
                        <h4>& Get The Answer</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque corrupti dicta omnis tempore.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End work section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->



<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Feature section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="choose-us-section pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 text-center">
                <div class="section-header">
                    <span class="section-sub-titel"><i class="las la-robot"></i> Feature</span>
                    <h2 class="section-title">A comprehensive overview of our feature</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, voluptatibus?</p>
                </div>
            </div>
            <div class="row mb-30-none justify-content-center">
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="feature-item">
                        <div class="icon-area">
                            <img src="{{ asset('public/frontend') }}/images/feature/1.png" alt="icon">
                        </div>
                        <h3 class="title">Language Understanding</h3>
                        <p>I can understand and process natural language input to provide relevant and coherent responses to your questions and statements.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="feature-item">
                        <div class="icon-area">
                            <img src="{{ asset('public/frontend') }}/images/feature/2.png" alt="icon">
                        </div>
                        <h3 class="title">Context Awareness</h3>
                        <p>I maintain context throughout our conversation, which means I can remember previous interactions and use that information to give more accurate and consistent replies.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="feature-item">
                        <div class="icon-area">
                            <img src="{{ asset('public/frontend') }}/images/feature/3.png" alt="">
                        </div>
                        <h3 class="title">Multilingual Support</h3>
                        <p>I have been trained on a diverse range of languages, so I can understand and respond in various languages besides English.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="feature-item">
                        <div class="icon-area">
                            <img src="{{ asset('public/frontend') }}/images/feature/4.png" alt="">
                        </div>
                        <h3 class="title">Information Retrieval</h3>
                        <p>I can provide factual information on a wide array of topics, drawing from my training data up until September 2021.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="feature-item">
                        <div class="icon-area">
                            <img src="{{ asset('public/frontend') }}/images/feature/5.png" alt="">
                        </div>
                        <h3 class="title">Answering Questions</h3>
                        <p>Feel free to ask me any questions, and I'll do my best to provide informative and helpful answers.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="feature-item">
                        <div class="icon-area">
                            <img src="{{ asset('public/frontend') }}/images/feature/6.png" alt="">
                        </div>
                        <h3 class="title">Text Generation</h3>
                        <p>I can assist in generating creative writing, brainstorming ideas, crafting stories, and more.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="feature-item">
                        <div class="icon-area">
                            <img src="{{ asset('public/frontend') }}/images/feature/7.png" alt="">
                        </div>
                        <h3 class="title">Text Completion</h3>
                        <p>If you need help finishing sentences or paragraphs, I can offer suggestions to complete the text based on the context.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="feature-item">
                        <div class="icon-area">
                            <img src="{{ asset('public/frontend') }}/images/feature/8.png" alt="">
                        </div>
                        <h3 class="title">Programming Help</h3>
                        <p>I can provide assistance with coding-related queries, explain programming concepts, and offer code examples in various languages.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="feature-item">
                        <div class="icon-area">
                            <img src="{{ asset('public/frontend') }}/images/feature/9.png" alt="">
                        </div>
                        <h3 class="title">General Knowledge</h3>
                        <p>I have been trained on a vast amount of information, so feel free to ask about historical events, scientific concepts, technology, and more.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="feature-item">
                        <div class="icon-area">
                            <img src="{{ asset('public/frontend') }}/images/feature/10.png" alt="">
                        </div>
                        <h3 class="title">Conversational Partner</h3>
                        <p>Whether you want to engage in casual conversation or have a debate, I'm here to chat with you on various topics.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Feature section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start testimonial
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="testimonial-section pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7">
                <div class="section-header text-center">
                    <span class="section-sub-titel"><i class="las la-robot"></i> Testimonials</span>
                    <h2 class="section-title">What Clients Say About Us</h2>
                </div>
            </div>
        </div>
        <div class="testimonial-slider-wrapper">
            <div class="testimonial-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <ul class="testimonial-icon-list">
                                <li><i class="las la-star"></i></li>
                                <li><i class="las la-star"></i></li>
                                <li><i class="las la-star"></i></li>
                                <li><i class="las la-star"></i></li>
                                <li><i class="las la-star"></i></li>
                            </ul>
                            <h4 class="testimonial-title">Impressive Capabilities</h4>
                            <p>Many people were amazed by the language generation capabilities of ChatGPT. Its ability to generate coherent and contextually relevant responses impressed users and developers alike.</p>
                            <div class="testimonial-bottom-wrapper">
                                <div class="testimonial-user-area">
                                    <div class="title-area">
                                        <h5>Fardin Mehbub</h5>
                                        <span class="testimonial-date"><i class="las la-history"></i> 18-01-2023</span>
                                    </div>
                                    <div class="user-area">
                                        <img src="{{ asset('public/frontend') }}/images/user/2.jpg" alt="user">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <ul class="testimonial-icon-list">
                                <li><i class="las la-star"></i></li>
                                <li><i class="las la-star"></i></li>
                                <li><i class="las la-star"></i></li>
                                <li><i class="las la-star"></i></li>
                                <li><i class="las la-star"></i></li>
                            </ul>
                            <h4 class="testimonial-title">Innovative Technology</h4>
                            <p>AdBot was often seen as a groundbreaking application of artificial intelligence and natural language processing. It showcased the potential of AI language models for practical and creative applications.</p>
                            <div class="testimonial-bottom-wrapper">
                                <div class="testimonial-user-area">
                                    <div class="title-area">
                                        <h5>Fardin Mehbub</h5>
                                        <span class="testimonial-date"><i class="las la-history"></i> 18-01-2023</span>
                                    </div>
                                    <div class="user-area">
                                        <img src="{{ asset('public/frontend') }}/images/user/2.jpg" alt="user">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-nav-area">
                    <div class="slider-prev slider-nav">
                        <i class="las la-angle-left"></i>
                    </div>
                    <div class="slider-next slider-nav">
                        <i class="las la-angle-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End testimonial
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Faq
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="faq-section pb-120">
    <div class="container">
        <div class="faq-main-wrapper">
            <div class="row justify-content-center">
                <div class="col-xl-6 text-center">
                    <div class="section-header">
                        <span class="section-sub-titel"><i class="las la-robot"></i> FAQ</span>
                        <h2 class="section-title"> Frequently Asked Questions</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="faq-wrapper">
                        <div class="faq-item">
                            <h3 class="faq-title"><span class="title">What is AdBot Pro?</span><span
                                    class="right-icon"></span></h3>
                            <div class="faq-content">
                                <p>Adbot is an AI language model developed by OpenAI. It is based on the GPT-3.5 architecture and is designed to understand and generate human-like text based on the input it receives./p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <h3 class="faq-title"><span class="title">How does Adbot work?</span><span
                                    class="right-icon"></span></h3>
                            <div class="faq-content">
                                <p>ChatGPT uses a deep learning technique called Transformer, which allows it to process and generate text based on patterns and context in the data it was trained on. It employs a large neural network with billions of parameters to achieve its language understanding and generation capabilities.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <h3 class="faq-title"><span class="title">Is AdBot the same as GPT-3?</span><span
                                    class="right-icon"></span></h3>
                            <div class="faq-content">
                                <p>ChatGPT is based on the GPT-3.5 architecture, which is an improvement over the earlier GPT-3 model. GPT-3.5 is more powerful and capable of understanding context better than GPT-3./p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <h3 class="faq-title"><span class="title">OpenAI ensure safety and prevent misuse of AdBot?</span><span
                                    class="right-icon"></span></h3>
                            <div class="faq-content">
                                <p>OpenAI implements safety measures, guidelines, and policies to limit harmful or inappropriate outputs from the AI. Users are also encouraged to provide feedback on problematic model outputs to improve its safety.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <h3 class="faq-title"><span class="title">What are the limitations of AdBot?</span><span
                                    class="right-icon"></span></h3>
                            <div class="faq-content">
                                <p>While ChatGPT is advanced, it has some limitations. It may sometimes provide inaccurate or incomplete information, not be up-to-date on recent events, and it can sometimes produce plausible-sounding but incorrect answers.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Faq
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start brand section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="brand-section pb-60">
    <div class="container">
        <div class="brand-main-wrapper">
            <h3 class="title">Trusted & Used by 1,245+ Companies</h4>
            <div class="brand-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand-item">
                            <img src="{{ asset('public/frontend') }}/images/brand/1.png" alt="brand">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-item">
                            <img src="{{ asset('public/frontend') }}/images/brand/2.png" alt="brand">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-item">
                            <img src="{{ asset('public/frontend') }}/images/brand/3.png" alt="brand">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-item">
                            <img src="{{ asset('public/frontend') }}/images/brand/4.png" alt="brand">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-item">
                            <img src="{{ asset('public/frontend') }}/images/brand/5.png" alt="brand">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-item">
                            <img src="{{ asset('public/frontend') }}/images/brand/6.png" alt="brand">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-item">
                            <img src="{{ asset('public/frontend') }}/images/brand/7.png" alt="brand">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-item">
                            <img src="{{ asset('public/frontend') }}/images/brand/8.png" alt="brand">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End brand section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
@endsection


@push("script")
    
@endpush