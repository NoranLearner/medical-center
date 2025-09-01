@extends('layouts.master')
@section('title', __('main.add_service'))

@section('content')
<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5>{{ __('main.add_service') }}</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('dashboard.services.store') }}" method="POST">
                    @csrf

                    {{-- اللغات --}}
                    @foreach (LaravelLocalization::getSupportedLocales() as $locale => $properties)
                        <div class="mb-3">
                            <label for="name_{{ $locale }}" class="form-label">
                                {{ __('main.service_name') }} ({{ $properties['native'] }})
                            </label>
                            <input type="text"
                                   id="name_{{ $locale }}"
                                   name="{{ $locale }}[name]"
                                   class="form-control @error($locale.'.name') is-invalid @enderror"
                                   value="{{ old($locale.'.name') }}"
                                   required>
                            @error($locale.'.name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="desc_{{ $locale }}" class="form-label">
                                {{ __('main.service_description') }} ({{ $properties['native'] }})
                            </label>
                            <textarea id="desc_{{ $locale }}"
                                      name="{{ $locale }}[description]"
                                      class="form-control @error($locale.'.description') is-invalid @enderror">{{ old($locale.'.description') }}</textarea>
                            @error($locale.'.description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    @endforeach

                    <div class="mb-3">
                        <label for="price" class="form-label">{{ __('main.service_price') }}</label>
                        <input type="number" step="0.01" name="price" id="price"
                               class="form-control @error('price') is-invalid @enderror"
                               value="{{ old('price') }}" required>
                        @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">{{ __('main.save') }}</button>
                    <a href="{{ route('dashboard.services.index') }}" class="btn btn-secondary">{{ __('main.cancel') }}</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
