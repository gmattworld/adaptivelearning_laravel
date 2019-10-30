{{-- @if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger text-center">
            <button class="close" data-close="alert"></button>
            {!! $error !!}
        </div>
    @endforeach
@endif --}}

@if(session('success'))
    <div class="alert alert-success text-center">
        <button class="close" data-close="alert"></button>
        {!! session('success') !!}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger text-center">
        <button class="close" data-close="alert"></button>
        {!! session('error') !!}
    </div>
@endif
