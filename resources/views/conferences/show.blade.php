@extends('layouts.app')

@section('content')
    @if(session('status'))
        <div style="background-color: green; color: lime;">{{ session('status') }}</div>
    @endif
    <h1>{{ $conferences['title'] }}</h1>
    <p>{{ $conferences['content'] }}</p>
@endsection
