@extends('base')

@section('title', 'Mentions légales')

@section('content')
    <div class="mentions-container">
        <h1>Mentions légales</h1>

        <h2>EDITEUR</h2>
        <p>Gbless & ShibaoInuyama</p>
        <p>5 Bd Louis XIV</p>
        <p>59800 Lille</p>
        <p>Mail :<a href="mailto:contact@ocnamo.com"> contact@ocnamo.com</a></p>

        <h2>WEBDESIGNER LILLE</h2>
        <p>5 Bd Louis XIV</p>
        <p>59800 Lille</p>
        <p>Tel : 06 22 33 11 99</p>
        <p>Mail :<a href="mailto:contact@ocnamo.com"> contact@ocnamo.com</a></p>
        <p>Site : <a href="{{ route ('main.home') }}">https://OCNAMO</a></p>

        <h2>HÉBERGEUR</h2>
        <p>Cnam</p>
        <p>5 Bd Louis XIV</p>
        <p>59800 Lille</p>
        <p>Site : <a href="{{ route ('main.home') }}">https://OCNAMO</a></p>
    </div>
@endsection

