@extends('layouts.app')
@section('title')
    Leadership
@endsection
@section('body')


<!-- ============================================-->
<!-- <section> begin ============================-->
    <section class="bg-100 text-center">
        <div class="container">
            <div class="text-center mb-6">
                <h3 class="fs-2 fs-md-3">Global leadership</h3>
                <hr class="short"
                    data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
                    data-zanim-trigger="scroll" />
            </div>
            <div class="row">
                @foreach ($leaders as $leader)
                <div class="col-sm-6 col-lg-4">
                    <div class="card h-100"><img class="card-img-top" src="{{ asset('uploads/' . $leader->image) }}"
                            alt="Reenal Scott" />
                        <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <div class="overflow-hidden">
                                <h5 data-zanim-xs='{"delay":0}'>{{ $leader->name }}</h5>
                            </div>
                            <div class="overflow-hidden">
                                <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>{{ $leader->post }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->
@endsection
