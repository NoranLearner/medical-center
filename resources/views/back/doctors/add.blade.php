@extends('layouts.master')
@section('title', __('main.add_doctor'))
@section('css')
    <!-- Internal Select2 css -->
    <link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ __('main.doctors') }}</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{ __('main.add_doctor') }}</span>
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

                    <div class="main-content-label mg-b-20 mb-5">
                        {{ __('main.add_doctor') }}
                    </div>

                    <form action="{{ route('dashboard.doctors.store') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        {{-- Start Doctor Image --}}

                        <div class="mb-3">
                            <label for="customFile" class="form-label">
                                {{ __('main.doctor_image') }}
                            </label>
                            {{-- <p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.
                            </p> --}}
                            {{-- <img id="image-prv" alt="doctor image" width="150px" height="150px" src=""> --}}
                            <div class="row row-sm">
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input class="custom-file-input" type="file" id="customFile" name="image"
                                            class="form-control @error('image') is-invalid @enderror"
                                            value="{{ old('image') }}" onchange="showPreview(event)">
                                        <label class="custom-file-label"
                                            for="customFile">{{ __('main.Choose_file') }}</label>
                                    </div>
                                </div>
                            </div>
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- <div class="form-group">
                            <label for="image">Category Image</label>
                            <img id="image-prv" alt="category image" width="150px" height="150px" src="">
                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Upload</span>
                                </div>
                                <div class="form-control text-truncate" data-trigger="fileinput">
                                    <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                    <span class="fileinput-filename"></span>
                                </div>
                                <span class="input-group-append">
                                    <span class=" btn btn-primary btn-file">
                                        <span class="fileinput-new">Select file</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" id="image" name="image" onchange="showPreview(event)">
                                    </span>
                                    <a href="#" class="btn btn-secondary fileinput-exists"
                                        data-dismiss="fileinput">Remove</a>
                                </span>
                            </div>
                            @error('image')
                            <span class="form-text text-danger">{{ $message }}</span>
                            @enderror
                        </div> --}}
                        {{--
                        <script>
                            function showPreview(event) {
                                if (event.target.files.length > 0) {
                                    let src = URL.createObjectURL(event.target.files[0]);
                                    let pv = document.getElementById('image-prv');
                                    pv.src = src;
                                }
                            }
                        </script> --}}
                        {{-- End Doctor Image --}}

                        <div class="panel panel-primary tabs-style-2 mb-3">
                            <div class=" tab-menu-heading">
                                <div class="tabs-menu1">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs main-nav-line">
                                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                            <li>
                                                <a class="nav-link {{ $loop->index == 0 ? 'active' : '' }}"
                                                    id="dash-tab-{{ $localeCode }}" data-toggle="tab"
                                                    href="#nav-dash-{{ $localeCode }}" hreflang="{{ $localeCode }}"
                                                    nhref="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                    {{ $properties['native'] }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body main-content-body-right border">
                                <div class="tab-content">
                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <div class="tab-pane {{ $loop->index == 0 ? 'active' : '' }}"
                                            id="nav-dash-{{ $localeCode }}" aria-labelledby="dash-tab-{{ $localeCode }}">
                                            {{-- Doctor Name --}}
                                            <div class="form-group">
                                                <label for="name_{{ $localeCode }}" class="form-label">
                                                    {{ __('main.doctor_name') }} ({{ __('main.in_' . $localeCode) }})
                                                </label>
                                                <input type="text"
                                                    class="form-control @error($localeCode . '.name') is-invalid @enderror"
                                                    id="name_{{ $localeCode }}" name="{{ $localeCode }}[name]"
                                                    value="{{ old($localeCode . '.name') }}" required>
                                                @error($localeCode . '.name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            {{-- Doctor Job --}}
                                            <div class="form-group">
                                                <label for="job_{{ $localeCode }}" class="form-label">
                                                    {{ __('main.doctor_job') }} ({{ __('main.in_' . $localeCode) }})
                                                </label>
                                                <input type="text"
                                                    class="form-control @error($localeCode . '.job') is-invalid @enderror"
                                                    id="job_{{ $localeCode }}" name="{{ $localeCode }}[job]"
                                                    value="{{ old($localeCode . '.job') }}">
                                                @error($localeCode . '.job')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        {{-- Doctor Email --}}
                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('main.doctor_email') }}</label>
                            <input type="email" name="email" id="email"
                                class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Doctor Phone --}}
                        <div class="mb-3">
                            <label for="phone" class="form-label">{{ __('main.doctor_phone') }}</label>
                            <input type="text" name="phone" id="phone"
                                class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}">
                            @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Specializations --}}
                        <div class="mb-3">
                            <label for="specializations" class="form-label">{{ __('main.doctor_specialty') }}</label>
                            <div class="row row-sm">
                                <div class="col-sm-9">
                                    <select class="form-control select2" multiple="multiple" name="specializations[]"
                                        id="specializations">
                                        @foreach($specializations as $specialization)
                                            <option value="{{ $specialization->id }}">{{ $specialization->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    {{-- <a class="btn btn-success text-secondary" href="#">{{ __('main.add_specialization') }}</a> --}}
                                    <button class="btn btn-secondary btn-with-icon btn-block">
                                        <i class="las la-plus-square mx-2"></i> {{ __('main.add_specialization') }}
                                    </button>
                                </div>
                            </div>
                        </div>

                        {{-- Services --}}
                        <div class="mb-3">
                            <label for="services" class="form-label">{{ __('main.doctor_service') }}</label>
                            <div class="row row-sm">
                                <div class="col-sm-9">
                                    <select class="form-control select2" multiple="multiple" name="services[]" id="services">
                                        @foreach($services as $service)
                                            <option value="{{ $service->id }}">{{ $service->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <a class="btn btn-secondary btn-with-icon btn-block text-white" href="{{ route('dashboard.services.create') }}">
                                        <i class="las la-plus-square mx-2"></i> {{ __('main.add_service') }}
                                    </a>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">{{ __('main.save') }}</button>

                        <a href="{{ route('dashboard.doctors.index') }}"
                            class="btn btn-secondary">{{ __('main.cancel') }}</a>

                    </form>

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
    <!--Internal  Datepicker js -->
    <script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
    <!--Internal  jquery.maskedinput js -->
    <script src="{{URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js')}}"></script>
    <!--Internal  spectrum-colorpicker js -->
    <script src="{{URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js')}}"></script>
    <!-- Internal Select2.min js -->
    <script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
    <!--Internal  jquery-simple-datetimepicker js -->
    <script src="{{URL::asset('assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')}}"></script>
    <!-- Ionicons js -->
    <script src="{{URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js')}}"></script>
    <!--Internal  pickerjs js -->
    <script src="{{URL::asset('assets/plugins/pickerjs/picker.min.js')}}"></script>
    <!-- Internal form-elements js -->
    <script src="{{URL::asset('assets/js/form-elements.js')}}"></script>
@endsection
