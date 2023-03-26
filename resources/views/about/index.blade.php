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

                        <div class="pd-details-solution">
                            <div class="pd-details-solution-img-box d-flex align-items-center">
                                <div class="pd-details-solution-img">
                                    <img src="{{ asset('data/our-company.jpeg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="payment-method" class="tp-payment__area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <div class="tp-payment__title-box text-center mb-55">
                        <h3 class="tp-section-title-lg" style="font-szie: 28px;">
                            KAUNG MYAT SAN THU CO.,LTD
                        </h3>
                        <p>
                            Company Statement
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-md-6 mb-30">
                            <div class="tp-payment__item tp-payment__bg-color-2 p-relative z-index wow tpfadeLeft"
                                data-wow-duration=".9s" data-wow-delay=".3s">
                                {{-- <div class="tp-payment__shape-4">
                                    <center>
                                        <img src="https://cdn-icons-png.flaticon.com/512/2421/2421314.png" alt=""
                                            style="width: 50%;">
                                    </center>
                                </div> --}}
                                <div class="tp-payment__shape-5">
                                    <center>
                                        <img src="https://cdn-icons-png.flaticon.com/512/2421/2421314.png" alt=""
                                            style="width: 70%;">
                                    </center>
                                </div>

                                <div class="tp-payment__shape-6">
                                    <img src="assets/img/payment/hand.png" alt="">
                                </div>
                                <div class="tp-payment__shape-7">
                                    <img src="assets/img/payment/coin-1.png" alt="">
                                </div>
                                <div class="tp-payment__shape-8">
                                    <img src="assets/img/payment/coin-2.png" alt="">
                                </div>
                                <div class="tp-payment__content">
                                    <h3 class="tp-payment__title">
                                        Our Vision
                                    </h3>
                                    <p>
                                        To enable the discovery of opportunities by providing consistently flexible
                                        Recruitment solutions.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-30">
                            <div class="tp-payment__item tp-payment__bg-color-3 p-relative z-index wow tpfadeRight"
                                data-wow-duration=".9s" data-wow-delay=".5s">
                                <div class="tp-payment__shape-9">
                                    <img src="assets/img/payment/payment-3.png" alt="">
                                </div>
                                <div class="tp-payment__shape-11">
                                    <img src="assets/img/payment/message.png" alt="">
                                </div>
                                <div class="tp-payment__content">
                                    <h3 class="tp-payment__title">
                                        Our Mission
                                    </h3>
                                    <p>
                                        To bring success to all of our clients by our relentless commitment to deliver the
                                        highest quality talent more quickly, efficiently, intelligently and above all to
                                        ensure the complete satisfaction of both the job applicant and the employer.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 mb-30">
                    <div class="tp-payment__item p-relative z-index wow tpfadeUp" data-wow-duration=".9s"
                        data-wow-delay=".7s">
                        <div class="tp-payment__shape-1">
                            <img src="assets/img/payment/background.png" alt="">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="tp-payment__content tp-payment__content-space">
                                    <h3 class="tp-payment__title">
                                        Our Values
                                    </h3>
                                    <p>
                                        To deliver customized and cost-effective solutions to organizations across the globe
                                        that gives them an edge over their competitors.
                                        <br><br>
                                        Identify the right talent and goals thus helping them secure the right jobs.
                                    </p>
                                    <a href="{{ route('contact.index') }}">
                                        Contact Us
                                        <i class="far fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tp-payment__shape-2">
                                    <center>
                                        <img src="https://cdn-icons-png.flaticon.com/512/3702/3702135.png" alt=""
                                            style="width: 70%;">
                                    </center>
                                </div>
                                <div class="tp-payment__shape-6">
                                    <img src="assets/img/payment/hand.png" alt="">
                                </div>
                                <div class="tp-payment__shape-7">
                                    <img src="assets/img/payment/coin-1.png" alt="">
                                </div>
                                <div class="tp-payment__shape-8">
                                    <img src="assets/img/payment/coin-2.png" alt="">
                                </div>
                                {{-- <div class="tp-payment__shape-3 d-none d-sm-block">
                                    <img src="assets/img/payment/get-paid.png" alt="">
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12" style="padding: 14px;">
                    <h2 class="m-b10" style="color: #e93f33; text-shadow: 5px 5px 5px gray; font-weight: bold;">
                        Company Company Certificate
                    </h2>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12" style="padding: 14px;">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/c1.png') }}" alt="" data-enlargeable=""
                            style="object-position: top; width: 100%; height: 340px; object-fit: cover; background-size: corver; border: 2px solid #555;"
                            class="img-enlargeable">
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12" style="padding: 14px;">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/c2.png') }}" alt="" data-enlargeable=""
                            style="object-position: top; width: 100%; height: 340px; object-fit: cover; background-size: corver; border: 2px solid #555;"
                            class="img-enlargeable">
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12" style="padding: 14px;">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/c3.png') }}" alt="" data-enlargeable=""
                            style="object-position: top; width: 100%; height: 340px; object-fit: cover; background-size: corver; border: 2px solid #555;"
                            class="img-enlargeable">
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12" style="padding: 14px;">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/c4.png') }}" alt="" data-enlargeable=""
                            style="object-position: top; width: 100%; height: 340px; object-fit: cover; background-size: corver; border: 2px solid #555;"
                            class="img-enlargeable">
                    </div>
                </div>

                <hr>
                <div class="col-lg-12 col-md-12 col-sm-12" style="padding: 14px;">
                    <h2 class="m-b10" style="color: #e93f33; text-shadow: 5px 5px 5px gray; font-weight: bold;">
                        <center>
                            Our Organization Chart
                        </center>
                    </h2>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12" style="padding: 14px;">
                    <center>
                        <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                            <img src="{{ asset('data/org.png') }}" alt="" data-enlargeable=""
                                style="object-position: top; width: 50%; height: auto; object-fit: cover; background-size: corver; border: 2px solid #555;"
                                class="img-enlargeable">
                        </div>
                    </center>
                </div>

            </div>
        </div>
    </div>
@endsection
