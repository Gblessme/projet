@extends('base')

@section('content')

@section('title', 'Menu')
    <section>
        <h2>Menu</h2>
        @foreach ($categories as $categorie)
            <div>
                <h3>{{ $categorie->nom }}</h3>
                <ul class="plats">
                    @foreach ($categorie->plats() as $plat)
                    <li>
                        <div class="plat-nom">
                            <a href="{{route('main.plat', ['id'=> $plat->id])}}" class="image-plat">
                                <img src="{{ asset('Image/' . $plat->fichier) }}" alt="{{ $plat->nom }}" /></a>
                                <a href="{{route('main.plat', ['id'=> $plat->id])}}" class="image-plat">
                                    <h4>{{ $plat->nom }}</h4></a>
                                    <span class="prix">{{ $plat->prix }}€</span> 
                                </div>
                            <ul>
                            @foreach ($plat->etiquettes() as $etiquette)
                        <li class="etiquette">{{$etiquette->nom}}</li>
                        @endforeach
                    </ul>
                    </li>
                        @endforeach
                </ul>
            </div>
        @endforeach

    </section>
@endsection
