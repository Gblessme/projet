@extends('base')

@section('title', 'Accueil')

@section('content')

    <div class="cours">
    <img src="/public/Image/cours.jpg" alt="">
    </div>

    <div id="menu">
        <!-- Catégorie Entrée -->
        <div class="category">
            <h2>Entrée</h2>
            <div class="item" data-name="Salade" data-price="5.99">
                <img src="/public/image/accueil.jpeg" alt="Salade">
                <p>Salade</p>
                <p class="price">5.99 €</p>
                <button onclick="addToCart(this)">Ajouter au panier</button>
            </div>
            <!-- Ajoutez d'autres plats ici -->
        </div>

        <!-- Autres catégories ici -->

    </div>

    <div id="cart">
        <h2>Panier</h2>
        <ul id="cart-items">
            <!-- Les éléments du panier seront ajoutés ici dynamiquement -->
        </ul>
        <p id="total">Total : 0.00 €</p>
        <button onclick="placeOrder()">Je commande</button>
    </div>

<ul>

@endsection