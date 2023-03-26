<header class="tp-header-height">
    <!-- tp-header-area-start -->
    <div id="header-sticky"
        class="header-bottom__area header-bottom__plr-5 header-bottom__transparent z-index-3 white-bg">
        <div class="container-fluid p-0">
            <div class="row g-0 align-items-center">
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-6">
                    <div class="header-bottom__logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('assets/img/logo/logo-black.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xxl-8 col-xl-7 col-lg-8 d-none d-lg-block">
                    <div class="header-bottom__main-menu header-bottom__main-menu-5 text-center">
                        <nav id="mobile-menu">
                            <ul>

                                <li>
                                    <a href="{{ route('home') }}">
                                        Home
                                    </a>
                                </li>

                                <li>
                                    <a href="javascript:void(0)">
                                        About Of Our Company
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="{{ route('about.index') }}">
                                                Company Profile
                                            </a>
                                        </li>

                                        <li>
                                            <a href="about.html">
                                                MD'S MESSAGE
                                            </a>
                                        </li>

                                        <li>
                                            <a href="about.html">
                                                Meet Our Team
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript:void(0)">
                                        Jobs In Overseas
                                    </a>
                                    <ul class="submenu">
                                        @foreach ($countryies as $country)
                                            <li>
                                                <a href="{{ route('job.show', $country->id) }}">
                                                    {{ $country->title ?? '' }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>

                                <li>
                                    <a href="{{ route('client.index') }}">
                                        Our Client Lists
                                    </a>
                                </li>

                                <li>
                                    <a href="javascript:void(0)">Our Activities</a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="{{ route('gallery_activities') }}">
                                                Office Gallery
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('event_activities') }}">
                                                Event & Activities
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('labour_activities') }}">
                                                Labour Activities
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-lg-2 col-md-8 col-6">
                    <div class="header-bottom__right header-five__btn d-flex align-items-center justify-content-end">
                        <div class="header-bottom__btn d-flex align-items-center">
                            <a class="tp-btn-yellow inner-color tp-btn-hover alt-color-black d-none d-md-inline-block"
                                href="{{ route('contact.index') }}">
                                <span class="white-text">
                                    Contact Now
                                </span>
                                <b></b>
                            </a>
                            <a class="header-bottom__bar tp-menu-bar d-lg-none" href="javascript:void(0)"><i
                                    class="fal fa-bars"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tp-header-area-end -->
</header>
