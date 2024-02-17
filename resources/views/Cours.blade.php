@extends('base')

@section('title', 'Accueil')

@section('content')

    <div class="cours">
        <img src="/public/Image/cours.jpg" alt="">
    </div>

    <div class="menu">
        <!-- Catégorie Entrée -->
        <div class="category">
            <h2>Entrée</h2>
            <div class="item" data-name="Salade" data-price="5.99">
                <img src="{{ url('/Image/accueil.jpg') }}" alt="Image 1">
                <p>Salade</p>
                <p class="price">5.99 €</p>
                <button class="addToCartBtn">Ajouter au panier</button>
            </div>
            <!-- Ajoutez d'autres plats ici -->
        </div>

        <!-- Autres catégories ici -->

    </div>

    <div class="cart">
        <h2>Panier</h2>
        <ul class="cart-items">
            <!-- Les éléments du panier seront ajoutés ici dynamiquement -->
        </ul>
        <p class="total">Total : 0.00 €</p>
        <button class="placeOrderBtn">Je commande</button>
    </div>

<ul>
@endsection
