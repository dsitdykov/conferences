@extends('layouts.app')

@section('content')
    <h1>{{ trans('app.list_tag') }}</h1>
    @if(session('status'))
        <div style="background-color: green; color: lime;">{{ session('status') }}</div>
    @endif
    @auth
    <a href="{{ route('conferences.create') }}"><button type="button">{{ trans('app.create_new_btn') }}</button></a>
    @endauth
    @each('conferences.partials.list', $conferences, 'conference')
@endsection
