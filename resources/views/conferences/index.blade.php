@extends('layouts.app')

@section('content')
    <h1 class="col-md-10 mx-auto py-3">{{ trans('app.list_tag') }}</h1>
    @auth
        <div class="col-md-10 mx-auto pb-4">
            <a href="{{ route('conferences.create') }}"><button class="btn btn-dark " type="button">{{ trans('app.create_new_btn') }}</button></a>
        </div>
    @endauth
    @each('conferences.partials.list', $conferences, 'conference')
@endsection
