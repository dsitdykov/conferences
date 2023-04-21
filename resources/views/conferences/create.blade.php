@extends('layouts.app')

@section('content')
    <h1 class="col-md-8 mx-auto py-3">{{ trans('app.create_tag') }}</h1>
    <form class="col-md-8 mx-auto" action="{{ route('conferences.store') }}" method="POST">
        @csrf
        @include('conferences.partials.form')

        <div class="py-3">
            <input class="btn btn-dark" type="submit" value={{ trans('app.create_btn') }} >
        </div>
    </form>
@endsection
