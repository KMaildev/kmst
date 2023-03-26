@extends('layouts.main')
@section('title', 'Event & Activities')
@section('content')

    <div class="breadcrumb__area breadcrumb-height-2 breadcrumb-overlay p-relative fix"
        data-background="{{ asset('data/activities.jpeg') }}">
        <div class="breadcrumb__shape-4 z-index-4">
            <img src="{{ asset('assets/img/breadcrumb/breadcrumb-sub-3.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="breadcrumb__content z-index-3 text-center">
                        <h3 class="breadcrumb__title tp-char-animation text-black">
                            Event & Activities
                        </h3>
                        <div class="breadcrumb__text wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".6s">
                            <p>
                                WE'VE DONE LOTS OF WORK, LET’S CHECK SOME ACTIVITIES HERE.
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
                    <div class="row py-3">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 grid-item  cat1 cat4 cat3 cat5">
                            <h5>
                                {{ $activitie->title ?? '' }}
                            </h5>
                        </div>
                        @php
                            $values = explode(',', $activitie->images);
                        @endphp
                        @foreach ($values as $gallery)
                            <div style="" class="col-xl-3 col-lg-3 col-md-3 col-sm-3 grid-item  cat1 cat4 cat3 cat5">
                                <img class="w-100" src="{{ $gallery }}" alt=""
                                    style="width: 100%; height: 260px; background-size: center; object-fit: cover; box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;">
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
