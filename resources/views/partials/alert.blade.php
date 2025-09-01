@if(session('success'))
    <div class="col-lg-12 col-md-12 mb-3">
        {{-- alert-dismissible fade show mt-3 --}}
        <div class="alert alert-success" role="alert">
            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>{{ session('success') }}</strong>
        </div>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger mg-b-0" role="alert">
        <button aria-label="Close" class="close" data-dismiss="alert" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>{{ session('error') }}</strong>
    </div>
@endif
