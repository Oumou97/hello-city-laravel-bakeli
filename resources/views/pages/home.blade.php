@extends('app')

@section('title',env('APP_NAME'))


@section('content')
    <h1>Hello from Dakar!</h1>

    <p>It's currently {{ date('h:i A') }}.</p>
@endsection


