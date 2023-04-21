@extends('layouts.app')

@section('content')
    <h4>{{ trans('app.edit_tag') }}</h4>
    <form action="{{ route('conferences.update', ['conference' => $conference->id]) }}" method="POST">
        @csrf
        @method('PUT')
        @include('conferences.partials.form')

        <div><input type="submit" value={{ trans('app.edit_btn') }}></div>
    </form>
@endsection
