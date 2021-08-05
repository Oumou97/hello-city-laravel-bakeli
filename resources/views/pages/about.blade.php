@extends('layouts/app', ['title' => 'About Us'])

@section('content')
    <img src="{{ asset('images/logoBakeli.png') }}" alt="Logo Bakeli" class="my-12 rounded-full">

    <h2 class="mb-5 text-gray-700">Built with <span class="text-pink-500">&hearts;</span> by LES TEACHERS DU NET.</h2>

    <p>
        <a href="{{ route('home') }}" class="text-red-500 hover:text-red-600 underline">Revenir à la page d'accueil</a>
    </p>
@endsection

