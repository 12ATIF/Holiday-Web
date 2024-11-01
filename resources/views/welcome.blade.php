@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <!-- start banner slider backround-image 1920x1100-->
    <section
        class="p-0 top-space-margin full-screen md-h-600px sm-h-500px border-top border-4 border-color-base-color position-relative"
        data-parallax-background-ratio="0.3"
        style="background-image: url('https://media.istockphoto.com/id/1503227069/photo/young-couple-tourist-relaxing-and-enjoying-the-beautiful-view-at-ulun-danu-beratan-temple-in.webp?a=1&b=1&s=612x612&w=0&k=20&c=4JuI66KctJqjlmdhEnztKAEMB0wA9Szoc6ITc1w3dd8=')">
        <div class="opacity-light bg-black"></div>
        <div class="container h-100 position-relative">
            <div class="row align-items-center h-100 justify-content-center">
                <div class="col-md-10 position-relative text-white d-flex flex-column justify-content-center text-center h-100"
                    data-anime='{ "el": "childs", "translateY": [-15, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h5 class="alt-font fw-400 mb-20px text-shadow-double-large">Jelajahi Lebih Lanjut</h5>
                    <div
                        class="fs-225 lg-fs-200 md-fs-170 sm-fs-150 xs-fs-110 fw-700 mb-20px ls-minus-8px md-ls-minus-4px xs-ls-minus-2px text-shadow-double-large">
                        Holiday</div>
                    <div class="mb-30px">
                        <a href="{{ url('demo-hotel-and-resort-contact') }}"
                            class="btn btn-extra-large btn-switch-text btn-white fw-700 btn-round-edge btn-box-shadow">
                            <span>
                                <span class="btn-double-text" data-text="Dapatkan Promo">Pesan Sekarang</span>
                                <span><i class="fa-solid fa-arrow-right fs-14"></i></span>
                            </span>
                        </a>
                    </div>
                    <div
                        class="position-absolute sm-position-relative bottom-80px lg-bottom-50px sm-bottom-0px left-0px right-0px d-flex justify-content-center align-items-center">
                        <div class="fs-22 fw-500">Perfect place to relax and <div class="highlight-separator"
                                data-shadow-animation="true" data-animation-delay="500">enjoy your rest.<span><img
                                        src="{{ asset('images/highlight-separator.svg') }}" alt=""></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner slider -->
    <!-- start section -->
    <section class="bg-very-light-gray half-section ps-6 pe-6">
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 justify-content-center"
                data-anime='{ "el": "childs", "translateX": [-15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- start features box item -->
                <div
                    class="col icon-with-text-style-10 border-end border-1 sm-border-end-0 border-color-transparent-base-color md-mb-50px">
                    <div class="feature-box ps-8 pe-8 xl-ps-5 xl-pe-5">
                        <div class="feature-box-icon feature-box-icon-rounded w-120px h-120px rounded-circle mb-20px">
                            <i class="line-icon-Medal-2 icon-extra-large text-base-color"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="alt-font text-dark-gray fs-22 ls-0px">Five stars luxury resort</span>
                            <p>Experience a unique stay.</p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div
                    class="col icon-with-text-style-10 border-end border-1 md-border-end-0 border-color-transparent-base-color md-mb-50px">
                    <div class="feature-box ps-8 pe-8 xl-ps-5 xl-pe-5">
                        <div class="feature-box-icon feature-box-icon-rounded w-120px h-120px rounded-circle mb-20px">
                            <i class="line-icon-Moustache-Smiley icon-extra-large text-base-color"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="alt-font text-dark-gray fs-22 ls-0px">Well trained manpower</span>
                            <p>Dedicated meal courses.</p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div
                    class="col icon-with-text-style-10 border-end border-1 sm-border-end-0 border-color-transparent-base-color sm-mb-50px">
                    <div class="feature-box ps-8 pe-8 xl-ps-5 xl-pe-5">
                        <div class="feature-box-icon feature-box-icon-rounded w-120px h-120px rounded-circle mb-20px">
                            <i class="line-icon-French-Fries icon-extra-large text-base-color"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="alt-font text-dark-gray fs-22 ls-0px">Fine dining restaurants</span>
                            <p>Discover a medley of flavours.</p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-10">
                    <div class="feature-box ps-8 pe-8 xl-ps-5 xl-pe-5">
                        <div class="feature-box-icon feature-box-icon-rounded w-120px h-120px rounded-circle mb-20px">
                            <i class="line-icon-Life-Safer icon-extra-large text-base-color"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="alt-font text-dark-gray fs-22 ls-0px">Large swimming pool</span>
                            <p>Unwind and discover joy.</p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="background-position-center background-repeat"
        style="background-image: url('images/vertical-center-line-bg.svg')">
        <div class="container">
            <div class="row align-items-center mb-12 md-mb-17 xs-mb-25">
                <div class="col-lg-5 md-mb-50px"
                    data-anime='{ "el": "childs", "opacity": [0, 1], "rotateY": [-90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 800, "delay": 200, "easing": "easeOutCirc" }'>
                    <span class="mb-10px text-base-color fw-500 d-block">Tentang Kami</span>
                    <h2 class="alt-font text-dark-gray ls-minus-2px">Relax at the luxury resorts around the entire world.
                    </h2>
                    <p class="w-80 xl-w-100 mb-35px xs-mb-10px">Selamat datang di Holiday.com Kami adalah platform digital yang berdedikasi untuk memperkenalkan keindahan wisata lokal dan destinasi terbaik di Indonesia.</p>
                    <div class="d-inline-block w-100">
                        <a href="demo-hotel-and-resort-about-us.html"
                            class="btn btn-extra-large btn-switch-text btn-dark-gray btn-box-shadow btn-round-edge d-inline-block align-middle me-30px xs-me-10px xs-mt-20px">
                            <span>
                                <span class="btn-double-text" data-text="About resort">About resort</span>
                            </span>
                        </a>
                        <div class="fs-20 fw-600 d-inline-block align-middle text-dark-gray xs-mt-20px"><a
                                href="tel:1800222000"><i
                                    class="bi bi-telephone-outbound text-medium-gray icon-small me-10px"></i>1 800 222
                                000</a></div>
                    </div>
                </div>
                <div class="col-lg-6 position-relative offset-lg-1">
                    <span
                        class="fs-90 position-absolute left-60px md-left-100px sm-left-70px xs-left-10px top-90px xs-top-50px text-dark-gray fw-700 z-index-1"
                        data-bottom-top="transform: translateY(50px) scale(1,1)"
                        data-top-bottom="transform: translateY(-50px) scale(1,1)"
                        data-anime='{ "opacity": [0,1], "duration": 600, "delay": 1500, "staggervalue": 300, "easing": "easeOutQuad" }'><span
                            class="fs-15 fw-600 d-table lh-16 text-uppercase text-medium-gray">Since</span>2021</span>
                    <div class="w-75 overflow-hidden position-relative xs-w-80 border-radius-4px float-end"
                        data-anime='{ "effect": "slide", "color": "#A0875B", "direction":"rl", "easing": "easeOutQuad", "duration": 600, "delay":400}'>
                        <img class="w-100" src="/images/bali.png" alt="">
                    </div>
                    <div class="position-absolute left-minus-70px md-left-15px bottom-minus-50px w-55 overflow-hidden"
                        data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)"
                        data-anime='{ "effect": "slide", "color": "#ffffff", "direction":"lr", "easing": "easeOutQuad", "duration": 600, "delay":500}'>
                        <img class="w-100 border-radius-4px" src="/images/penari.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row position-relative">
                <div class="col swiper swiper-width-auto feather-shadow text-cente"
                    data-slider-options='{ "slidesPerView": "auto", "spaceBetween":0, "centeredSlides": true, "speed": 10000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":1, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                    <div class="swiper-wrapper marquee-slide">
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div class="fs-28 sm-fs-22 alt-font ls-minus-05px text-dark-gray"><span
                                    class="w-10px h-10px border border-radius-100 border-color-base-color d-inline-block ms-50px me-50px md-ms-30px md-me-30px"></span>Our
                                hotel has been present for over 20 years</div>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div class="fs-28 sm-fs-22 alt-font ls-minus-05px text-dark-gray"><span
                                    class="w-10px h-10px border border-radius-100 border-color-base-color d-inline-block ms-50px me-50px md-ms-30px md-me-30px"></span>We
                                make the best for all our customers</div>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div class="fs-28 sm-fs-22 alt-font ls-minus-05px text-dark-gray"><span
                                    class="w-10px h-10px border border-radius-100 border-color-base-color d-inline-block ms-50px me-50px md-ms-30px md-me-30px"></span>The
                                resort is built in and around an 18 acres</div>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div class="fs-28 sm-fs-22 alt-font ls-minus-05px text-dark-gray"><span
                                    class="w-10px h-10px border border-radius-100 border-color-base-color d-inline-block ms-50px me-50px md-ms-30px md-me-30px"></span>Sustainable
                                and meaningful ecosystem of hospitality</div>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div class="fs-28 sm-fs-22 alt-font ls-minus-05px text-dark-gray"><span
                                    class="w-10px h-10px border border-radius-100 border-color-base-color d-inline-block ms-50px me-50px md-ms-30px md-me-30px"></span>Our
                                hotel has been present for over 20 years</div>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div class="fs-28 sm-fs-22 alt-font ls-minus-05px text-dark-gray"><span
                                    class="w-10px h-10px border border-radius-100 border-color-base-color d-inline-block ms-50px me-50px md-ms-30px md-me-30px"></span>We
                                make the best for all our customers</div>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div class="fs-28 sm-fs-22 alt-font ls-minus-05px text-dark-gray"><span
                                    class="w-10px h-10px border border-radius-100 border-color-base-color d-inline-block ms-50px me-50px md-ms-30px md-me-30px"></span>The
                                resort is built in and around an 18 acres</div>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div class="fs-28 sm-fs-22 alt-font ls-minus-05px text-dark-gray"><span
                                    class="w-10px h-10px border border-radius-100 border-color-base-color d-inline-block ms-50px me-50px md-ms-30px md-me-30px"></span>Sustainable
                                and meaningful ecosystem of hospitality</div>
                        </div>
                        <!-- end client item -->
                        <!-- end client item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection
