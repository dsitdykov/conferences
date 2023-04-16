@extends('layouts.app')

@section('content')
    <h2>List of articles</h2>
    @foreach($conferences as $conference)
        <h1>{{ $conference['title'] }}</h1>
        <p>{{ $conference['content'] }}</p>
        <br>
    @endforeach
@endsection
