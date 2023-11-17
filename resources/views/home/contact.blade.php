@extends('layouts.app')
@section('title')
    Contact Us
@endsection
@section('body')
    <!-- <section> begin ============================-->
    <section class="bg-100">
        <div class="container">
            <div class="row align-items-stretch justify-content-center mb-4">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="card h-100">
                        <div class="card-body px-5">
                            <h5 class="mb-3">RIMA ADDRESS</h5>
                            <p class="mb-0 text-1100"><strong>E-mail</strong> :www.rimaward.org,<br />Tel: +250788359692</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="card h-100">
                        <div class="card-body px-5">
                            <h5 class="mb-3">Sydney Office</h5>
                            <p class="mb-0 text-1100"> 62 Collins Street West,<br />Sydney 3000, <br />Australia</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="card h-100">
                        <div class="card-body px-5">
                            <h5>Socials</h5><a class="d-inline-block mt-2" href="#!"><span
                                    class="fab fa-linkedin fs-2 me-2 text-primary"></span></a><a class="d-inline-block mt-2"
                                href="#!"><span class="fab fa-twitter-square fs-2 mx-2 text-primary"></span></a><a
                                class="d-inline-block mt-2" href="#!"><span
                                    class="fab fa-facebook-square fs-2 mx-2 text-primary"></span></a><a
                                class="d-inline-block mt-2" href="#!"><span
                                    class="fab fa-google-plus-square fs-2 ms-2 text-primary"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body h-100 p-5">
                    <h5 class="mb-3">Write to us</h5>
                    <form>
                        <div class="mb-4"><input class="form-control bg-white" type="text" placeholder="Your Name"
                                required="required" /></div>
                        <div class="mb-4"><input class="form-control bg-white" type="email" placeholder="Email"
                                required="required" /></div>
                        <div class="mb-4">
                            <textarea class="form-control bg-white" rows="11" placeholder="Enter your descriptions here..."
                                required="required"></textarea>
                        </div><button class="btn btn-md-lg btn-primary" type="Submit"> <span
                                class="color-white fw-600">Send Now</span></button>
                    </form>
                </div>
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->
@endsection
