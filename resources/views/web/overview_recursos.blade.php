@extends('web.master')
@section('title', 'Página Principal')

@section('content')
    <div class="position-relative">
        <!-- Swiper Main Slider -->
        <div class="">
            <div class="">
                <div class="swiper-slide d-flex gradient-x-overlay-sm-dark bg-img-start"
                    style="background-image: url(./assets/img/1920x1080/img4.jpg); min-height: 40rem;">
                    <!-- Container -->
                    <div class="container content-space-2 content-space-lg-4 content-space-md-4 content-space-b-2"
                        style="min-height: 40rem;">
                        <div class="row">
                            <div class="col-md-5 col-lg-5 mb-7 mb-md-0 text-lg-start text-md-start text-center">
                                <div class="mb-5">
                                    <h1>
                                        <span class="text-gray">AWAY BOX</span>
                                        <br>
                                        <span class="text-white"></span> ORGANIZA E AJUDA SUA EMPRESA A CRESCER
                                    </h1>
                                    <p class="lead text-white-70">Much more than a bank, Front is the ideal, fastest and
                                        most convenient financial and administrative co-driver to work with peace of mind.
                                    </p>
                                    <div class="text-lg-start text-md-start text-center gap-3">
                                        <a class="btn btn-theme-success btn-transition font-weight-600  me-2"
                                            href="./page-login-simple.html">
                                            CONTRATAR <i class="bi-chevron-right small ms-1"></i>
                                        </a>

                                        <a class="video-player btn btn-white btn-transition"
                                            href="https://www.youtube.com/watch?v=d4eDWc8g0e0" role="button"
                                            data-fslightbox="youtube-video">
                                            <i class="bi-play-circle-fill me-1"></i> <span
                                                class="d-none d-md-inline-block">Veja como funciona </span>
                                        </a>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-7">
                                <div class="position-relative">
                                    <!-- Browser Device -->
                                    <figure class="device-browser">
                                        <div class="device-browser-header">
                                            <div class="device-browser-header-btn-list">
                                                <span class="device-browser-header-btn-list-btn"></span>
                                                <span class="device-browser-header-btn-list-btn"></span>
                                                <span class="device-browser-header-btn-list-btn"></span>
                                            </div>
                                            <div class="device-browser-header-browser-bar">www.htmlstream.com/front/</div>
                                        </div>

                                        <div class="device-browser-frame">
                                            <img class="device-browser-img" src="./assets/img/1618x1010/img1.jpg"
                                                alt="Image Description">
                                        </div>
                                    </figure>
                                    <!-- End Browser Device -->

                                    <div class="d-none d-sm-block position-absolute bottom-0 end-0 zi-1 mb-n5 me-n5"
                                        style="max-width: 20rem;" data-aos="fade-up" data-aos-delay="100">
                                        <!-- Card -->
                                        <div class="card bg-warning"
                                            style="background-image: url(./assets/svg/components/wave-pattern-light.svg);">
                                            <div class="card-body">
                                                <h4 class="card-title">Integrate quickly</h4>
                                                <p class="card-text text-dark">Front lets you spend your development time on
                                                    product improvements.</p>

                                                <!-- Avatar -->
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <img class="avatar avatar-sm avatar-circle"
                                                            src="./assets/img/160x160/img3.jpg" alt="Image Description">
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <h5 class="card-title mb-0">Raphael Olston</h5>
                                                        <p class="card-text text-dark small">Business</p>
                                                    </div>
                                                </div>
                                                <!-- End Avatar -->
                                            </div>
                                        </div>
                                        <!-- End Card -->
                                    </div>
                                </div>
                            </div>

                        </div>

                        {{-- <div class="w-lg-50 me-3">
              <!-- Media -->
              <div class="d-flex align-items-center mb-3">
                <div class="flex-shrink-0">
                  <div class="avatar avatar-circle">
                    <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                  </div>
                </div>

                <div class="flex-grow-1 ms-3">
                  <a class="text-white" href="./blog-article.html">Christina Kray</a>
                </div>
              </div>
              <!-- End Media -->

             
              
              <a class="btn btn-primary btn-transition" href="./blog-article.html">Read article <i class="bi-chevron-right small ms-1"></i></a>
            </div> --}}
                    </div>
                    <!-- End Container -->
                </div>

            </div>
        </div>
        <!-- End Swiper Main Slider -->
    </div>
    <!-- End Hero -->

@endsection
