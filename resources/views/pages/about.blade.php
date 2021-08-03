@extends('app')


@section('title', 'About Us | ' .config('app.name'))

@section('content')
    <img src="/images/logoBakeli.png" alt="Drapeau Sénégal">

    <p>Built with &hearts; by LES TEACHERS DU NET.</p>

    <p><a href="{{ route('home') }}">Revenir à la page d'accueil</a></p>
@endsection

