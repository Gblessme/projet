@extends('base')

@section('content')
<section>
    <img src="{{ asset('Image/' . $plat->fichier) }}" alt="{{ $plat->titre }}" />
    <div class="item">

        <h2>{{ $plat->nom }}</h2>
        <span class="prix">9,99 eur</span>
        <button onclick="addToCart(this)">Ajouter au panier</button>
        <a href="pagepizza1.html"> {{ $plat->prix }}</a>
        @foreach ($plat->etiquettes() as $etiquette)
         <li>{{$etiquette->nom}}</li>

    </div>
    @endforeach
</ul>
</section>
<div id="cart">
    <h2>Panier</h2>
    <ul id="cart-items">
        <!-- Les éléments du panier seront ajoutés ici dynamiquement -->
    </ul>
    <p id="total">Total : 0.00 €</p>
    <button onclick="placeOrder()">Je commande</button>
</div>

@endsection