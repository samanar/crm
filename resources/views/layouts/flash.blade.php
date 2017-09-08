@if (Session::has('success'))
    <div class="alert alert-success">
        <i class="fa fa-check-circle-o" aria-hidden="true"></i> {{ Session::get('success') }}
    </div>
@endif