<!DOCTYPE html>
<html lang="en-US" dir="ltr">


<!-- Mirrored from prium.github.io/elixir/v3.0.0/homes/header-slider-classic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2023 06:30:03 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title> @yield('title')| RIMAWARD</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend/assets/img/rimaward.png') }}">
    <meta name="theme-color" content="#ffffff">
    <script src="{{ asset('frontend/vendors/overlayscrollbars/OverlayScrollbars.min.js') }}"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('frontend/vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendors/hamburgers/hamburgers.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendors/loaders.css/loaders.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/theme.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/assets/css/user.min.css') }}" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&amp;family=Open+Sans:wght@300;400;600;700;800&amp;display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="bg-primary py-3 d-none d-sm-block text-white fw-bold">
        <div class="container">
            <div class="row align-items-center gx-4">
                <div class="col-auto d-none d-lg-block fs--1"><span class="fas fa-map-marker-alt text-warning me-2"
                        data-fa-transform="grow-3"></span>Avenue,Muhima, KN AV 8. </div>
                <div class="col-auto ms-md-auto order-md-2 d-none d-sm-flex fs--1 align-items-center"><span
                        class="fas fa-clock text-warning me-2" data-fa-transform="grow-3"></span>Mon-Sat, 8.00-18.00.
                    Sunday CLOSED</div>
                <div class="col-auto"><span class="fas fa-phone-alt text-warning" data-fa-transform="shrink-3"></span><a
                        class="ms-2 fs--1 d-inline text-white fw-bold" href="tel:2123865575">+250788359692
                        </a></div>
            </div>
        </div>
    </div>
    <div class="sticky-top navbar-elixir">
        <div class="container">
            <nav class="navbar navbar-expand-lg"> <a class="navbar-brand" href="{{ route('index') }}"><img
                        src="{{ asset('frontend/assets/img/rima.png') }}" alt="logo" /></a><button
                    class="navbar-toggler p-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#primaryNavbarCollapse" aria-controls="primaryNavbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="hamburger hamburger--emphatic"><span
                            class="hamburger-box"><span class="hamburger-inner"></span></span></span></button>
                <div class="collapse navbar-collapse" id="primaryNavbarCollapse">
                    <ul class="navbar-nav py-3 py-lg-0 mt-1 mb-2 my-lg-0 ms-lg-n1">
                        <li class="nav-item"><a class="nav-link" href="{{ route('index') }}" role="button">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('leadership') }}" role="button">Staff members</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('about') }}" role="button">About Us</a></li>
                        <li class="nav-item dropdown"><a class="nav-link" href="{{ route('contact') }}" role="button">Contact</a></li>
                    </ul>
                    <a class="btn btn-outline-primary rounded-pill btn-sm border-2 d-block d-lg-inline-block ms-auto my-3 my-lg-0"
                        href="https://ishushoarts.org/" target="_blank">Ishusho Art</a>
                </div>
            </nav>
        </div>
    </div>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="preloader" id="preloader">
            <div class="loader">
                <div class="line-scale">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
       @yield('body')

    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->



    <!--===============================================-->
    <!--    Footer-->
    <!--===============================================-->

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section style="background-color: #3D4C6F">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="bg-primary text-white p-5 p-lg-6 rounded-3">
                        <h4 class="text-white fs-1 fs-lg-2 mb-1">Sign up for email alerts</h4>
                        <p class="text-white">Stay current with our latest insights</p>
                        <form class="mt-4">
                            <div class="row align-items-center">
                                <div class="col-md-7 pe-md-0">
                                    <div class="input-group"><input class="form-control" type="email"
                                            placeholder="Enter Email Here" /></div>
                                </div>
                                <div class="col-md-5 mt-3 mt-md-0">
                                    <div class="d-grid"><button class="btn btn-warning" type="submit"><span
                                                class="text-primary fw-semi-bold">Submit</span></button></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="row">
                        <div class="col-6 col-lg-4 text-white ms-lg-auto">
                            <ul class="list-unstyled">
                                <li class="mb-3"><a class="text-white" href="../contact.html">Contact Us</a></li>
                                <li class="mb-3"><a class="text-white" href="../index-2.html#!">FAQ</a></li>
                                <li class="mb-3"><a class="text-white" href="../index-2.html#!">Privacy Policy</a>
                                </li>
                                <li class="mb-3"><a class="text-white" href="../index-2.html#!">Terms of Use</a>
                                </li>
                                <li class="mb-3"><a class="text-white" href="../index-2.html#!">Global Office</a>
                                </li>
                                <li class="mb-3"><a class="text-white" href="../index-2.html#!">Local Office</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 col-sm-5 ms-sm-auto">
                            <ul class="list-unstyled">
                                <li class="mb-3"><a class="text-decoration-none d-flex align-items-center"
                                        href="#!"> <span class="brand-icon me-3"><span
                                                class="fab fa-youtube"></span></span>
                                        <h5 class="fs-0 text-white mb-0 d-inline-block">Youtube</h5>
                                    </a></li>
                                <li class="mb-3"><a class="text-decoration-none d-flex align-items-center"
                                        href="#!"> <span class="brand-icon me-3"><span
                                                class="fab fa-twitter"></span></span>
                                        <h5 class="fs-0 text-white mb-0 d-inline-block">Twitter</h5>
                                    </a></li>
                                <li class="mb-3"><a class="text-decoration-none d-flex align-items-center"
                                        href="#!"> <span class="brand-icon me-3"><span
                                                class="fab fa-facebook-f"></span></span>
                                        <h5 class="fs-0 text-white mb-0 d-inline-block">Facebook</h5>
                                    </a></li>
                                <li class="mb-3"><a class="text-decoration-none d-flex align-items-center"
                                        href="#!"> <span class="brand-icon me-3"><span
                                                class="fab fa-instagram"></span></span>
                                        <h5 class="fs-0 text-white mb-0 d-inline-block">Instagram</h5>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->

    <footer class="footer bg-primary text-center py-4">
        <div class="container">
            <div class="row align-items-center opacity-85 text-white">
                <div class="col-sm-3 text-sm-start"><a href="../index.html"><img
                    src="{{ asset('frontend/assets/img/rima.png') }}" alt="logo" /></a></div>
                <div class="col-sm-6 mt-3 mt-sm-0">
                    <p class="lh-lg mb-0 fw-semi-bold">&copy; Copyright 2021 RIMAward.</p>
                </div>
                <div class="col text-sm-end mt-3 mt-sm-0"><span class="fw-semi-bold">Designed by </span><a
                        class="text-white" href="https://themewagon.com/" target="_blank"> Danny Trust</a></div>
            </div>
        </div>
    </footer>

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('frontend/vendors/popper/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/bigpicture/BigPicture.js') }}"></script>
    <script src="{{ asset('frontend/vendors/countup/countUp.umd.js') }}"></script>
    <script src="{{ asset('frontend/vendors/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/lodash/lodash.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/gsap/gsap.js') }}"></script>
    <script src="{{ asset('frontend/vendors/gsap/customEase.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/theme.js') }}"></script>
</body>


<!-- Mirrored from prium.github.io/elixir/v3.0.0/homes/header-slider-classic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2023 06:30:04 GMT -->

</html>
