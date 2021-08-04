@extends('app')

@section('content')
    <img src="{{ asset('images/drapeauSn.jpg') }}" alt="Drapeau Sénégal">

    <h1>Hello from Dakar!</h1>

    <p>It's currently {{ date('h:i A') }}.</p>
@endsection


