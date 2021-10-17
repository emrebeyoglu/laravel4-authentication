@section('alert')

@if(Session::get('error'))

<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <p class="mb-0">{{ Session::get('error') }}</p>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

@elseif(Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <p class="mb-0">{{ Session::get('error') }}</p>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@stop