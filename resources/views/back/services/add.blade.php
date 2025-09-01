@extends('layouts.master')
@section('title', __('main.add_service'))
@section('css')
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ __('main.services') }}</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{ __('main.add_service') }}</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">

        <div class="col-lg-12 col-md-12">

            <div class="card">

                <div class="card-body">

                    <div class="main-content-label mg-b-20">
                        {{ __('main.add_service') }}
                    </div>

                    

                </div>
            </div>
        </div>

    </div>
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
@endsection
