@extends('layouts.app')

@section('content')
    <h1 class="col-md-8 mx-auto py-3">{{ trans('app.information_tag') }}</h1>
    <div class="card col-md-8 mx-auto m-2 p-2">
        <div class="card-body">
            <h5 class="card-title">{{ $conferences['title']}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $conferences['datetime']}}</h6>
            <h6 class="card-subtitle mb-2 text-muted">{{ $conferences['address']}}</h6>
            <p class="card-text">{{ $conferences['content']}}</p>
        </div>
    </div>
    <div class="py-3 col-md-8 mx-auto">
        <a href="{{ route('conferences.index') }}">
            <input class="btn btn-dark" type="submit" value={{ trans('app.ok_btn') }} >
        </a>
    </div>
@endsection
