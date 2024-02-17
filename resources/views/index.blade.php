@extends('base')

@section('title', 'Accueil')

@section('vite')
    @parent
    @vite(['resources/css/homepage.css'])
@endsection

@section('content')
    <h1>Accueil</h1>
    <p>
        Vous êtes sur la page d'accueil
    </p>
@endsection