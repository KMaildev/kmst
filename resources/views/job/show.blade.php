@extends('layouts.main')
@section('title', 'Job')
@section('content')

    <div class="breadcrumb__area breadcrumb-height-3 p-relative blue-bg-2 fix">
        <div class="breadcrumb__shape-1">
            <img src="{{ asset('assets/img/breadcrumb/breadcrumb-shape-1.png') }}" alt="">
        </div>
        <div class="breadcrumb__shape-2">
            <img src="{{ asset('assets/img/breadcrumb/breadcrumb-shape-2.png') }}" alt="">
        </div>
        <div class="container">
            <div class="breadcrumb__content-wrap">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="breadcrumb__content text-center z-index-3 mb-60">
                            <h3 class="breadcrumb__title">Build Your Career With <br> KAUNG MYAT SAN THU CO.,LTD</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="carrer-banner-area carrer-banner-space">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                    <div class="carrer-banner-img-item mb-20">
                        <img src="{{ asset('data/ma.jpeg') }}" alt="">
                    </div>
                    <div class="carrer-banner-img-item">
                        <img src="{{ asset('data/jp.jpeg') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="carrer-banner-img-item parallax-main">
                        <img class="parallax-img" src="{{ asset('data/shwedagon.jpeg') }}" alt=""
                            data-parallax='{"y": 300, "smoothness": 10}'>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                    <div class="carrer-banner-img-item mb-20">
                        <img src="{{ asset('data/th.jpeg') }}" alt="">
                    </div>
                    <div class="carrer-banner-img-item">
                        <img src="{{ asset('data/sg.webp') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="job-area pt-120 pb-120">
        <div class="container">

            <div class="row d-flex justify-content-center">
                <div class="col-xl-9 col-md-9 col-sm-12 col-lg-9">
                    <div class="job-section-box text-center mb-40">
                        <h3 class="tp-section-title">
                            {{ $country->title ?? '' }}
                        </h3>
                        <p>
                            Our KAUNG MYAT SAN THU CO.,LTD Agency sent many workers to abroad by given them good
                            training
                            and
                            leading provice of Human Resource Development Service.
                        </p>
                    </div>
                </div>
            </div>

            @foreach ($jobs as $job)
                <div class="job-post-box">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-4">
                            <div class="job-post-info d-flex justify-content-start align-items-center">
                                <div class="job-post-category">
                                    <span>
                                        {{ $job->job_title ?? '' }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-5">
                            <div class="job-post-wrapper d-flex align-items-center">
                                <div class="job-post-location d-flex align-items-center">
                                    <svg width="16" height="18" viewBox="0 0 16 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1 7.51463C1 3.9167 4.13401 1 8 1C11.866 1 15 3.9167 15 7.51463C15 11.0844 12.7658 15.2499 9.28007 16.7396C8.46748 17.0868 7.53252 17.0868 6.71993 16.7396C3.23416 15.2499 1 11.0844 1 7.51463Z"
                                            stroke="#5F6168" stroke-width="1.5" />
                                        <path
                                            d="M10 8C10 9.10457 9.10457 10 8 10C6.89543 10 6 9.10457 6 8C6 6.89543 6.89543 6 8 6C9.10457 6 10 6.89543 10 8Z"
                                            stroke="#5F6168" stroke-width="1.5" />
                                    </svg>
                                    <span>
                                        {{ $country->title ?? '' }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3">
                            <div class="job-post-apply-btn text-start text-md-end">
                                <a class="tp-btn-inner tp-btn-hover alt-color-orange"
                                    href="{{ route('cv.index') }}"><span>Apply</span> <b></b></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>

@endsection
