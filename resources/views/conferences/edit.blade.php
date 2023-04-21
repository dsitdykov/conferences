@extends('layouts.app')

@section('content')
    <h1 class="col-md-8 mx-auto py-3">{{ trans('app.edit_tag') }}</h1>
    <form class="col-md-8 mx-auto" action="{{ route('conferences.update', ['conference' => $conference->id]) }}" method="POST">
        @csrf
        @method('PUT')
        @include('conferences.partials.form')

        <div class="py-3">
            <input class="btn btn-dark" type="submit" value={{ trans('app.edit_btn') }}>
        </div>
    </form>
@endsection
