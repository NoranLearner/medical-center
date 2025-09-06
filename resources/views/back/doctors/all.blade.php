@extends('layouts.master')
@section('title', __('main.doctors'))
@section('css')
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ __('main.doctors') }}</h4>
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

            {{-- Start Add Doctor Button --}}
            <div class="d-flex justify-content-start mb-5">
                <a class="btn btn-outline-success btn-with-icon" href="{{ route('dashboard.doctors.create') }}">
                    <i class="typcn typcn-user-add mx-1"></i>
                    {{-- https://icons8.com/line-awesome --}}
                    {{-- <i class="las la-user-plus mx-1"></i> --}}
                    {{ __('main.add_doctor') }}
                </a>
            </div>
            {{-- EndAdd Doctor Button --}}

            <table class="table text-nowrap table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{ __('main.doctor_name') }}</th>
                        <th scope="col">{{ __('main.doctor_email') }}</th>
                        <th scope="col">{{ __('main.doctor_phone') }}</th>
                        <th scope="col">{{ __('main.doctor_job') }}</th>
                        <th scope="col">{{ __('main.doctor_specialty') }}</th>
                        <th scope="col">{{ __('main.doctor_service') }}</th>
                        <th scope="col">{{ __('main.actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $doctor)
                        <tr>
                            <td>{{($data->currentPage() - 1) * $data->perPage() + $loop->iteration}}</td>
                            <th scope="row">
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-sm online avatar-rounded">
                                        <img alt="doctor image" class="rounded-circle" src="{{ $doctor->profile_image_url }}">
                                    </span>
                                    <span class="mx-2">{{ $doctor->name }}</span>
                                </div>
                            </th>
                            <td><span class="badge">{{ $doctor->email }}</span></td>
                            <td><span class="badge">{{ $doctor->phone }}</span></td>
                            <td><span class="badge bg-success-transparent">{{ $doctor->job }}</span></td>
                            <td>
                                @foreach($doctor->specialties as $specialization)
                                    <span class="badge bg-primary-transparent">{{ $specialization->name }}</span><br />
                                @endforeach
                            </td>
                            <td>
                                @foreach($doctor->services as $Service)
                                    <span class="badge bg-primary-transparent">{{ $Service->name }}</span><br />
                                @endforeach
                            </td>
                            <td>
                                <div class="gap-2 flex-wrap btn-icon-list">
                                    {{-- Show --}}
                                    <a href="{{ route('dashboard.doctors.show', $doctor->id) }}"
                                        class="btn btn-outline-success btn-icon border-0" data-toggle="tooltip"
                                        data-original-title="{{ __(('main.view')) }}">
                                        <i class="las la-eye"></i>
                                    </a>
                                    {{-- Edit --}}
                                    <a href="{{ route('dashboard.doctors.edit', $doctor->id) }}"
                                        class="btn btn-outline-info btn-icon border-0" data-toggle="tooltip"
                                        data-original-title="{{ __(('main.edit')) }}">
                                        <i class="las la-edit"></i>
                                    </a>
                                    {{-- Delete --}}
                                    {{-- https://icons8.com/line-awesome --}}
                                    <form action="{{ route('dashboard.doctors.destroy', $doctor->id) }}" method="POST">
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
@endsection
@section('js')
@endsection
