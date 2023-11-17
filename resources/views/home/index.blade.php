@extends('layouts.app')
@section('title')
    Home
@endsection
@section('body')
    <section class="py-0">
        <div class="swiper theme-slider header-classic"
            data-swiper='{"loop":true,"allowTouchMove":false,"effect":"fade","speed":800}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide d-flex align-items-center d-sm-block" data-zanim-timeline="{}">
                    <div class="bg-holder" style="background-image:url({{ asset('frontend/assets/img/header-4.png') }});">
                    </div>
                    <!--/.bg-holder-->
                    <div class="container">
                        <div class="row py-8 align-items-center" data-inertia='{"weight":1.5}'>
                            <div class="col-11 col-lg-8 px-5 px-sm-3">
                                <div class="overflow-hidden">
                                    <h1 class="text-white fs-4 fs-md-5 lh-1" data-zanim-xs='{"delay":0}'>Helping Leaders
                                    </h1>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="text-white pt-4 mb-5 fs-1 fs-md-2 lh-xs" data-zanim-xs='{"delay":0.1}'>We
                                        look forward to help you in taking your
                                        company to new height.</p>
                                </div>
                                <div class="overflow-hidden">
                                    <div data-zanim-xs='{"delay":0.2}'><a class="btn btn-primary me-3 mt-3"
                                            href="#!">Read
                                            more<span class="fas fa-chevron-right ms-2"></span></a><a
                                            class="btn btn-warning mt-3" href="{{ route('contact') }}">Contact us<span
                                                class="fas fa-chevron-right ms-2"></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide d-flex align-items-center d-sm-block" data-zanim-timeline="{}">
                    <div class="bg-holder" style="background-image:url({{ asset('frontend/assets/img/header-7.png') }});">
                    </div>
                    <!--/.bg-holder-->
                    <div class="container">
                        <div class="row py-8 align-items-center" data-inertia='{"weight":1.5}'>
                            <div class="col-11 col-lg-8 px-5 px-sm-3">
                                <div class="overflow-hidden">
                                    <h1 class="fs-4 fs-md-5 lh-1 text-warninig" data-zanim-xs='{"delay":0}'>Movie Week
                                    </h1>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="text-primary pt-4 mb-5 fs-1 fs-md-2 lh-xs" data-zanim-xs='{"delay":0.1}'>Over
                                        10 years of experience in helping
                                        clients finding comprehensive solutions.</p>
                                </div>
                                <div class="overflow-hidden">
                                    <div data-zanim-xs='{"delay":0.2}'><a class="btn btn-primary me-3 mt-3"
                                            href="#!">Read
                                            more<span class="fas fa-chevron-right ms-2"></span></a><a
                                            class="btn btn-warning mt-3" href="../contact.html">Contact us<span
                                                class="fas fa-chevron-right ms-2"></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide d-flex align-items-center d-sm-block" data-zanim-timeline="{}">
                    <div class="bg-holder" style="background-image:url({{ asset('frontend/assets/img/header-8.png') }});">
                    </div>
                    <!--/.bg-holder-->
                    <div class="container">
                        <div class="row py-8 align-items-center" data-inertia='{"weight":1.5}'>
                            <div class="col-11 col-lg-8 px-5 px-sm-3">
                                <div class="overflow-hidden">
                                    <h1 class="fs-4 fs-md-5 lh-1" data-zanim-xs='{"delay":0}'>Growth Partners</h1>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="text-primary pt-4 mb-5 fs-1 fs-md-2 lh-xs" data-zanim-xs='{"delay":0.1}'>
                                        Connect with top consultants hand-picked by
                                        Elixir consulting and finance.</p>
                                </div>
                                <div class="overflow-hidden">
                                    <div data-zanim-xs='{"delay":0.2}'><a class="btn btn-primary me-3 mt-3"
                                            href="#!">Read
                                            more<span class="fas fa-chevron-right ms-2"></span></a><a
                                            class="btn btn-warning mt-3" href="../contact.html">Contact us<span
                                                class="fas fa-chevron-right ms-2"></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-nav">
                <div class="swiper-button-prev"><span class="fas fa-chevron-left"></span></div>
                <div class="swiper-button-next"><span class="fas fa-chevron-right"></span></div>
            </div>
        </div>
    </section>

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-4">
        <div class="container">
            <div class="row flex-center text-center pb-6">
                <div class="col-12">
                    <h3 class="fs-2 fs-lg-3">Welcome to the RIMAWARD</h3>
                    <p class="px-lg-4 mt-3">Rwanda International Movie Award</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4 mt-3 mt-lg-0 px-4 px-sm-3" data-zanim-timeline="{}"
                    data-zanim-trigger="scroll">
                    <h5 data-zanim-xs='{"delay":0}'><span class="text-primary me-3 fas fa-settings"></span> CORE OBJECTIVES
                    </h5>
                    <p class="mt-3 pe-3 pe-lg-5" data-zanim-xs='{"delay":0.1}'>
                        To reward, promote and empower Rwandan and regional
                        filmmakers to improve the quality of films produced <br /> in the
                        region in order to compete on the international film markets.</p>
                </div>
                <div class="col-sm-6 col-lg-4 mt-3 mt-lg-0 px-4 px-sm-3" data-zanim-timeline="{}"
                    data-zanim-trigger="scroll">
                    <h5 data-zanim-xs='{"delay":0}'><span class="text-primary me-3 fas fa-cube"></span>AIMS</h5>
                    <p class="mt-3 pe-3 pe-lg-5" data-zanim-xs='{"delay":0.1}'>Market Rwandan talents and create exposure
                        platform for the
                        well-made Rwandan filmsTo put Rwandan filmmakers into
                        competition with regional filmmakers and guide them toward a
                        profitable profession.
                    </p>
                </div>
                <div class="col-sm-6 col-lg-4 mt-3 mt-lg-0 px-4 px-sm-3" data-zanim-timeline="{}"
                    data-zanim-trigger="scroll">
                    <h5 data-zanim-xs='{"delay":0}'><span class="text-primary me-3 fas fa-list"></span>GOALS</h5>
                    <p class="mt-3 pe-3 pe-lg-5" data-zanim-xs='{"delay":0.1}'>To Make a Positive impact in the
                        edutainment industries,
                        including film industries..</p>
                </div>
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="bg-100">
        <div class="container">
            <div class="text-center mb-6">
                <h3 class="fs-2 fs-md-3">Latest News</h3>
                <hr class="short"
                    data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
                    data-zanim-trigger="scroll" />
            </div>
            <div class="row g-4">
                @foreach ($posts as $post)
                    <div class="col-md-6 col-lg-4">
                        <div class="card"><a href=""><img class="card-img-top"
                                    src="{{ asset('uploads/'.$post->image) }}" alt="Featured Image" /></a>
                            <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                <div class="overflow-hidden"><a href="{{ route('show', 'id') }}">
                                        <h5 data-zanim-xs='{"delay":0}'>{{ $post->title }}
                                        </h5>
                                    </a></div>
                                <div class="overflow-hidden">
                                    <p class="mt-3" data-zanim-xs='{"delay":0.2}'>{{ $post->description }}</p>
                                </div>
                                {{-- <div class="overflow-hidden">
                                    <div class="d-inline-block" data-zanim-xs='{"delay":0.3}'><a
                                            class="d-flex align-items-center" href="">Learn More<div
                                                class="overflow-hidden ms-2"
                                                data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>
                                                <span class="d-inline-block fw-medium">&xrarr;</span>
                                            </div></a></div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->
@endsection
