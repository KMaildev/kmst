@extends('layouts.main')
@section('title', 'Home')
@section('content')

    <div class="about-banner-area p-relative">
        <div class="about-shape-1">
            <img src="{{ asset('assets/img/breadcrumb/breadcrumb-shape-1.png') }}" alt="">
        </div>
        <div class="about-shape-2">
            <img src="{{ asset('assets/img/breadcrumb/breadcrumb-shape-2.png') }}" alt="">
        </div>
        <div class="about-banner p-relative z-index fix">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="about-banner-content">
                            <h4 class="about-banner-title" data-parallax='{"y": 1000, "smoothness": 10}'>
                                <span>About</span> <br>
                                <span>Us</span>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="about-img-area mb-100 z-index-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-img about-img-height p-relative" data-background="{{ asset('data/about.jpeg') }}">
                        <div class="about-img-content">
                            <h4 class="about-img-title" data-parallax='{"y": 1000, "smoothness": 10}'>
                                <span>About</span> <br>
                                <span>Us</span>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="tp-about__area tp-about__pt-pb pb-160">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 wow tpfadeLeft" data-wow-duration=".9s" data-wow-delay=".2s">
                    <div class="tp-about__img-wrapper text-center text-lg-end p-relative">
                        <div class="tp-about__bg-shape">
                            <img src="assets/img/about/about-bg-shape.png" alt="">
                        </div>
                        <div class="tp-about__main-img z-index">
                            <img src="{{ asset('data/1.png') }}" alt="">
                        </div>
                        <center>
                            <div class="tp-about__sub-img-1 d-none d-sm-block z-index-3">
                                <img src="{{ asset('data/2.png') }}" alt="" style="width: 60%">
                            </div>
                        </center>
                        <div class="tp-about__sub-img-2 d-none d-sm-block">
                            <img src="{{ asset('data/3.png') }}" alt="">
                        </div>
                        <div class="tp-about__sub-img-3 d-none d-sm-block z-index-3">
                            <img src="assets/img/about/about-5.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 wow tpfadeRight" data-wow-duration=".9s" data-wow-delay=".6s">
                    <div class="tp-about__right">
                        <div class="tp-about__section-box">
                            <h4 class="tp-section-subtitle">
                                PROFILE OF OUR COMPANY
                            </h4>
                            <h3 class="tp-section-title mb-15" style="font-size: 28px;">
                                KAUNG MYAT SAN THU CO.,LTD
                            </h3>
                            <p style="text-align: justify">
                                KAUNG MYAT SAN THU CO.,LTD was established in 2012 with the intention of recruiting
                                unskilled and skilled workers in oversea markets. Our company obtained Overseas Employment
                                Agency Licence in 2012 from the Ministry of Labour, Government of Union of Myanmar.
                                Government Union of Myanmar under the Manpower Licence. No.105/2012 to supply technicians
                                and Semi skilled workers to any countries in the world. Our company alsoobtained Licence No.
                                5/2012 (Thai) to supply skilled workers to Thailand. Taking this opportunitywe are pleased
                                to mentioned hereunder, details of our company as follows:
                            </p>
                        </div>
                        <div class="tp-about__btn">
                            <a class="tp-btn tp-btn-inner tp-btn-hover alt-color-black" href="{{ route('contact.index') }}">
                                <span>Contact Us</span>
                                <b></b>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="pd-details-area">
        <div class="container">
            <div class="row g-0">
                <div class="col-xl-2 col-lg-2 social-box-pin">
                    <div class="pd-details-social-box text-lg-center text-start p-relative">
                        <div class="pd-details-social-title">
                            <span>Share This <br>Story</span>
                        </div>
                        <div class="pd-details-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-10 ">

                    <table class="table table-striped table-bordered">
                        <tbody>
                            <tr>
                                <td style="color: black; font-weight: bold; width: 30%;">
                                    Name of the company
                                </td>
                                <td style="color: black; font-weight: bold">
                                    KAUNG MYAT SAN THU COMPANY LIMITED (KMST CO.,LTD)
                                </td>
                            </tr>

                            <tr>
                                <td style="color: black; font-weight: bold">
                                    Established Date
                                </td>
                                <td style="color: black; font-weight: bold">
                                    May 26,2011
                                </td>
                            </tr>

                            <tr>
                                <td style="color: black; font-weight: bold">
                                    Company Registration No
                                </td>
                                <td style="color: black; font-weight: bold">
                                    105108303
                                </td>
                            </tr>

                            <tr>
                                <td style="color: black; font-weight: bold">
                                    Manpower License No
                                </td>
                                <td style="color: black; font-weight: bold">
                                    105/2012
                                </td>
                            </tr>

                            <tr>
                                <td style="color: black; font-weight: bold">
                                    (For Thailand) License No.
                                </td>
                                <td style="color: black; font-weight: bold">
                                    5/2012(Thai)
                                </td>
                            </tr>

                            <tr>
                                <td style="color: black; font-weight: bold">
                                    Company Address
                                </td>
                                <td style="color: black; font-weight: bold">
                                    No.(38), Anawrahta 1st Street, 22 Ward, ShwePaukKan Myothit,
                                    North Okkalapa Township, Yangon, Myanmar.
                                </td>
                            </tr>

                            <tr>
                                <td style="color: black; font-weight: bold">
                                    Telephone No
                                </td>
                                <td style="color: black; font-weight: bold">
                                    (+959) 5410440, (+959) 448008279, (+959) 791986246
                                </td>
                            </tr>

                            <tr>
                                <td style="color: black; font-weight: bold">
                                    E-Mail
                                </td>
                                <td style="color: black; font-weight: bold">
                                    kmstco.ltd@gmail.com
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="pd-details-wrapper">
                        <div class="pd-details-info">
                            <p>
                                we are now trying almost best to supply the experienced workers needed by the reliable
                                manpower companies all over the world in accordance to the international law which of course
                                would be beneficial to all of us. <br><br>
                                Given us the place to contact, we will render our sincere service for the following. (a) All
                                kind of agency business, technical consultants, business consultants., Management consult-
                                ants and advisory services.
                            </p>

                            <div class="tp-about__list">
                                <ul>
                                    <li>
                                        <i class="fal fa-check"></i>
                                        All kind of agency business, technical consultants, business consultants.,
                                        Management consult-ants and advisory services.
                                    </li>
                                    <li>
                                        <i class="fal fa-check"></i>
                                        Business entertainment and related activities.
                                    </li>

                                    <li>
                                        <i class="fal fa-check"></i>
                                        Business of all kind of medical services.
                                    </li>

                                    <li>
                                        <i class="fal fa-check"></i>
                                        Business of printing & publishing service.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
