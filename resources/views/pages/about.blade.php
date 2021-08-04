@extends('app')


@section('title', 'About Us | ' .config('app.name'))

@section('content')
    <img src="{{ asset('images/logoBakeli.png') }}" alt="Logo Bakeli">

    <p>Built with &hearts; by LES TEACHERS DU NET.</p>

    <p><a href="{{ route('home') }}">Revenir à la page d'accueil</a></p>
@endsection

