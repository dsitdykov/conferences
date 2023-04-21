@extends('layouts.app')

@section('content')
    <h4>{{ trans('app.create_tag') }}</h4>
    <form action="{{ route('conferences.store') }}" method="POST">
        @csrf
        @include('conferences.partials.form')

        <div><input type="submit" value={{ trans('app.create_btn') }} ></div>
    </form>
@endsection
