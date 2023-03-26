@extends('layouts.main')
@section('title', 'Contact Us')
@section('content')

    <div class="about-banner-area p-relative">
        {{-- z-index-3 --}}
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
                                <span>Contact</span> <br>
                                <span>Now</span>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- tp-breadcrumb-header-area-start -->
    <div class="about-img-area mb-100 z-index-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-img about-img-height p-relative" data-background="{{ asset('data/contact.png') }}">
                        <div class="about-img-content">
                            <h4 class="about-img-title" data-parallax='{"y": 1000, "smoothness": 10}'>
                                <span>Contact</span> <br>
                                <span>Now</span>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tp-breadcrumb-header-area-end -->

    <!-- tp-contact-area-strat -->
    <div class="contact-info-area pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 mb-30">
                    <div class="contact-info-item">
                        <div class="contact-info-img">
                            <img src="{{ asset('data/phone.png') }}" alt="" style="width: 35%">
                        </div>
                        <div class="contact-info-title-box">
                            <h5 class="contact-info-title-sm">
                                Phone
                            </h5>
                            <p>
                                <a href="tel:09-5410440">
                                    09-5410440,
                                </a>
                                <a href="tel:09-448008279">
                                    09-448008279,
                                </a>
                                <br>
                                <a href="tel:09-791986246">
                                    09-791986246,
                                </a>
                                <a href="tel:09891198500">
                                    09891198500,
                                </a><br>
                                <a href="tel:09891198400">
                                    09891198400
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 mb-30">
                    <div class="contact-info-item p-relative">
                        <div class="contact-info-badge">
                            <span>Main Office</span>
                        </div>
                        <div class="contact-info-img">
                            <img src="{{ asset('assets/img/contact/contact-icon-sm-5.png') }}" alt="">
                        </div>
                        <div class="contact-info-title-box">
                            <h5 class="contact-info-title-sm">
                                Address
                            </h5>
                            <p>
                                No (38), Anaw YaHtar(1) Steet, Shwe Pauk Kan Myo Thit, North Okkalapa Township, Yangon,
                                Myanmar.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 mb-30">
                    <div class="contact-info-item">
                        <div class="contact-info-img">
                            <img src="{{ asset('data/gmail.png') }}" alt="" style="width: 35%">
                        </div>
                        <div class="contact-info-title-box">
                            <h5 class="contact-info-title-sm">
                                Email
                            </h5>
                            <p>
                                <a href="mailto:kmstco.ltd@gmail.com">
                                    kmstco.ltd@gmail.com
                                </a>
                                <br>
                                <a href="mailto:info@kaungmyatsanthu.com">
                                    info@kaungmyatsanthu.com
                                </a>
                                <br>
                                <a href="mailto:admin@kaungmyatsanthu.com">
                                    admin@kaungmyatsanthu.com
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-form-area pb-120">
        <div class="container">
            <div class="row gx-0">
                <div class="col-xl-5 col-lg-6">
                    <div class="contact-form-left">
                        <div class="contact-form-section-box pb-80">
                            <h5 class="inner-section-subtitle">CONTACT US</h5>
                            <h4 class="tp-section-title pb-10">We'd love to <br> hear From
                                <span>
                                    <svg width="44" height="44" viewBox="0 0 44 44" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect width="44" height="44" fill="url(#pattern0)" />
                                        <defs>
                                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1"
                                                height="1">
                                                <use xlink:href="#image0_2106_35"
                                                    transform="translate(-0.425532 -0.170213) scale(0.0212766)" />
                                            </pattern>
                                            <image id="image0_2106_35" width="83" height="66"
                                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFMAAABCCAYAAAArOOo+AAADcklEQVR4nO2bP0wTURzHP5RqQhyMtyJNTCcTnKCLnVhs4sRmHRk10U0WFhcXiQskuDPhxirRQZMagn8WB1gatTqQiMV/qRBM6nB99oDe9Y7+3mvf8T5j03u/yyfv97vvK8dQs9ls4hAh0+8bSBNOpiBOpiBOpiBOpiBOpiBOpiBOpiCnWma1AmvzUK/JrJeVWcYeqhWovoKnDw9/fu1e72ufCplhAhUXLsrUSa3MbgKD5IsyNVMlM4nAIF5Opr71Mk8qUFEoy92LlTJ7FRgkf7X3NRRDtvyeKSkwyKOvcmsN9M6UEuiNQf3z8c8lWxwGUKbkDvTGoHAzfC3JFocBkamjhfNFKC/Ag4no70jSN5m6ZiBAadY/0SxNR39PKhIpjMrUKRD8ti4v+jtubd6vF4b0vAQDMnULVOSLcHu1XbNbPel5CZqiUb0Gb57oF6hQba1qR81JhWQkUmjZmY+nO0cRaYJtrVi52/06HS0OmmTeWm239+sVHRUOt7Wi25z8f62GFgcDJ6B6TV5ssK0V1Ur3p7di7q38kxwMHyd7FduprdW6ceakQse8BBg6OPjbzGaH9aweQVKxndpasTQdr73Bn5flxfj3mYTMyxfv9KzcBS/nH/XKi37blRfCHwyl2XCRceekQte8BBg+N3Lp/tRUgTNn+3eyHDkPo1dg/LovdHTc/2zvB8wsh0uuVmDlTrJaM8u9328Y2efPNtjc/MDE5GV9VRLg5dq7Nop6Lf4DR6ErEiky29vfWF9/r7eKBuLkyaPobHFo/d18a+sjjcae3kqCJJ2TCulfiY6SAah92rZGZpxzdxg6smWQDMDOznd2d3/qrSRE0jmp0D0voSXzT2OP/f0D/dUEKM2e7Drd8xJaMqvVL/z+1dBfTYDJGye7rls6kMC6F7e8XPKWNdHiYKFMSP6SlYkWB0tlerlkMUd3JFJYKROglGB36o5ECmtl5ovxdpypeQkWywQoxHiym5qXYLnMWDvTQCRSWC3Ty0WHeJMtDpbLhOgQb7LFIQUyo0K8qUiksF4mhId4U5FIkQqZnUK86XkJKZEJx0O86XkJKZJ5NMSbjESK1MiEdojvR4tDymTmi61Xr/skcyBew5bCy8Fcf96pAFK2M/uNkymINf9UZQNuZwriZAriZAriZAriZAriZAriZAriZAryD4xxER8vOFEDAAAAAElFTkSuQmCC" />
                                        </defs>
                                    </svg>
                                </span>
                                you.
                            </h4>
                            <p>
                                Alternatively, you may contact us by filling up the contact form. Our team will response you
                                shortly.
                            </p>
                        </div>
                        <div class="contact-form-social-box p-relative">
                            <div class="contact-form-social-item">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="contact-form-section-img">
                                <img src="{{ asset('assets/img/contact/contact-icon-sm-4.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="contact-form-right-warp">
                        <div class="postbox__comment-form">
                            <form class="box" autocomplete="off" action="{{ route('contact.store') }}" method="POST"
                                id="create-form">
                                @csrf
                                <div class="row gx-20">

                                    <div class="col-12">
                                        <div class="postbox__comment-input mb-30">
                                            <input name="name" class="inputText" type="text" required=""
                                                value="{{ old('name') }}">
                                            <span class="floating-label">Name</span>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="postbox__comment-input mb-30">
                                            <input name="email" class="inputText" type="email"
                                                value="{{ old('email') }}" required="">
                                            <span class="floating-label">Your Email</span>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="postbox__comment-input mb-35">
                                            <input name="subject" class="inputText" type="text"
                                                value="{{ old('subject') }}" required="">
                                            <span class="floating-label">Subject</span>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="postbox__comment-input mb-35">
                                            <input name="phone" class="inputText" type="text"
                                                value="{{ old('phone') }}" required="">
                                            <span class="floating-label">Phone Number</span>
                                        </div>
                                    </div>


                                    <div class="col-xxl-12">
                                        <div class="postbox__comment-input mb-30">
                                            <textarea class="textareaText" required name="message"></textarea>
                                            <span class="floating-label-2">Message...</span>
                                        </div>
                                    </div>

                                    <div class="col-xxl-12">
                                        <div class="postbox__btn-box">
                                            <button type="submit" class="submit-btn w-100">Send your Request</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-inner-area pb-130">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="contact-inner-title-sm-wrap text-center mb-50">
                        <h4 class="contact-inner-title-sm">
                            Google Map
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
