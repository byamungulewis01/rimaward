@extends('layouts.admin.app')
@section('page-name') Dashboard @endsection
@section('body')

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Home</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">RIMAWARD</a></li>
                            <li class="breadcrumb-item active">Home</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->


@endsection

@section('script')
  <!-- apexcharts -->
  <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

  <!-- Vector map-->
  <script src="{{ asset('assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
  <script src="{{ asset('assets/libs/jsvectormap/maps/world-merc.js') }}"></script>

  <!-- Dashboard init -->
  <script src="{{ asset('assets/js/pages/dashboard-analytics.init.js') }}"></script>
@endsection
