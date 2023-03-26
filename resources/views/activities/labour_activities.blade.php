@extends('layouts.main')
@section('title', 'Labour Activities')
@section('content')

    <div class="breadcrumb__area breadcrumb-height-2 breadcrumb-overlay p-relative fix"
        data-background="assets/img/project/project-brdcrmb-bg.jpg">
        <div class="breadcrumb__shape-4 z-index-4">
            <img src="{{ asset('assets/img/breadcrumb/breadcrumb-sub-3.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="breadcrumb__content z-index-3 text-center">
                        <h3 class="breadcrumb__title tp-char-animation text-black">
                            Labour Activities
                        </h3>
                        <div class="breadcrumb__text wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".6s">
                            <p>
                                EVENTS / ACTIVITIES / INTERVIEW / DEPATURE
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-area pt-100 pb-90">
        <div class="container">
            <div class="row grid">
                @foreach ($activities as $activitie)
                    @php
                        $values = explode(',', $activitie->images);
                    @endphp
                    @foreach ($values as $gallery)
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 grid-item  cat1 cat4 cat3 cat5">
                            <div class="inner-project-item mb-30">
                                <div class="inner-project-img fix p-relative">
                                    <img class="w-100" src="{{ $gallery }}" alt=""
                                        style="width: 100%; height: 260px; background-size: center; object-fit: cover; border: 2px solid #2e58f0;">
                                </div>
                                <div class="inner-project-content">
                                    <span class="inner-project-category-title">
                                        {{ $activitie->title ?? '' }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
@endsection
