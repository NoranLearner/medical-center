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

                    <div class="main-content-label mg-b-20 mb-5">
                        {{ __('main.add_service') }}
                    </div>

                    <form action="{{ route('dashboard.services.store') }}" method="POST">

                        @csrf

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
                                            {{-- Service Name --}}
                                            <div class="form-group">
                                                <label for="name_{{ $localeCode }}" class="form-label">
                                                    {{ __('main.service_name') }} ({{ __('main.in_' . $localeCode) }})
                                                </label>
                                                <input type="text"
                                                    class="form-control @error($localeCode . '.name') is-invalid @enderror"
                                                    id="name_{{ $localeCode }}" name="{{ $localeCode }}[name]"
                                                    value="{{ old($localeCode . '.name') }}" required>
                                                @error($localeCode . '.name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            {{-- Service Description --}}
                                            <div class="form-group">
                                                <label for="description_{{ $localeCode }}" class="form-label">
                                                    {{ __('main.service_description') }} ({{ __('main.in_' . $localeCode) }})
                                                </label>
                                                <textarea
                                                    class="form-control @error($localeCode . '.description') is-invalid @enderror"
                                                    id="description_{{ $localeCode }}" name="{{ $localeCode }}[description]"
                                                    rows="3">{{ old($localeCode . '.description') }}</textarea>
                                                @error($localeCode . '.description')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">{{ __('main.service_price') }}</label>
                            <input type="number" step="0.01" name="price" id="price"
                                class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}"
                                required>
                            @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">{{ __('main.save') }}</button>

                        <a href="{{ route('dashboard.services.index') }}"
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
@endsection
