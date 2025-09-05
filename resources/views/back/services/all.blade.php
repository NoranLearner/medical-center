@extends('layouts.master')
@section('title')
{{ __('main.services') }}
@stop
@section('css')
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ __('main.services') }}</h4>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">

        {{-- Start Alerts --}}

        @include('partials.alert')

        {{-- End Alerts --}}

        <div class="table-responsive">

            {{-- Start Add Service Button --}}
            <div class="d-flex justify-content-start mb-5">
                <a class="btn btn-outline-success btn-with-icon" href="{{ route('dashboard.services.create') }}">
                    <i class="las la-plus-square mx-1"></i>
                    {{ __('main.add_service') }}
                </a>
            </div>
            {{-- EndAdd Service Button --}}

            <table class="table text-nowrap table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{ __('main.service_name') }}</th>
                        <th scope="col">{{ __('main.service_description') }}</th>
                        <th scope="col">{{ __('main.service_price') }}</th>
                        <th scope="col">{{ __('main.actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $service)
                        <tr>
                            <td>{{($data->currentPage() - 1) * $data->perPage() + $loop->iteration}}</td>
                            <td>{{ $service->name }}</td>
                            <td>{{ $service->description }}</td>
                            <td>
                                <a class="modal-effect btn text-primary" data-effect="effect-scale" data-toggle="modal"
                                    href="#editPriceModal{{ $service->id }}">
                                    {{ $service->currentPrice?->formatted_price ?? __('main.empty_price') }}
                                    <i class="las la-pen"></i>
                                </a>
                            </td>
                            <td>
                                <div class="gap-2 flex-wrap">
                                    {{-- https://icons8.com/line-awesome --}}
                                    <form action="{{ route('dashboard.services.destroy', $service->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger btn-icon border-0" data-toggle="tooltip"
                                            data-original-title="{{ __(('main.delete')) }}">
                                            <i class="icon-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- row closed -->
    {{ $data->links('pagination::bootstrap-5') }}
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
    <!-- Modal effects -->
    @foreach ($data as $service)
        <div class="modal" id="editPriceModal{{ $service->id }}">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content modal-content-demo">
                    <form action="{{ route('dashboard.services.update', $service->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="modal-content">

                            <div class="modal-header">
                                <h5 class="modal-title">{{ $service->name }}</h5>
                                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="price{{ $service->id }}"
                                        class="form-label">{{ __('main.service_price') }}</label>
                                    <input type="number" step="0.01" name="price" id="price{{ $service->id }}"
                                        class="form-control" value="{{ $service->currentPrice?->price }}">
                                </div>
                                <div class="mb-3">
                                    <label for="valid_from{{ $service->id }}"
                                        class="form-label">{{ __('main.valid_from') }}</label>
                                    <input type="date" name="valid_from" id="valid_from{{ $service->id }}" class="form-control"
                                        value="{{ $service->currentPrice?->valid_from ?? now()->toDateString() }}">
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button class="btn ripple btn-primary" type="submit">{{ __('main.save') }}</button>
                                <button class="btn ripple btn-secondary" data-dismiss="modal"
                                    type="button">{{ __('main.cancel') }}</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    <!-- End Modal effects-->
@endsection
@section('js')
    <!-- Internal Modal js-->
    <script src="{{URL::asset('assets/js/modal.js')}}"></script>
@endsection
