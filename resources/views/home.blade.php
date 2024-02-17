@extends('base')

@section('title', 'Accueil')

@section('content')
    <h1>Bienvenue dans votre nouveau Restau<h1>
        <div class="carousel">
            <div class="carousel_items">
              <img src="Image/logo.jpg" alt="" class="carousel_img">
              <img src="Image/logo.jpg" alt="" class="carousel_img">
              <img src="Image/logo.jpg" alt="" class="carousel_img">
              <img src="Image/logo.jpg" alt="" class="carousel_img">
              <img src="Image/cours.jpg" alt="" class="carousel_img">

            </div>
          </div>
    <div>
        <img src="{{ url('/Image/accueil.jpg') }}" alt="Image 1">
        <h3>Titre</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In perspiciatis nemo nobis quis temporibus dolores impedit facilis quaerat quibusdam nisi, maxime molestias, mollitia iste error, harum corrupti? Molestiae, nobis aut?</p>
    </div>

{{-- <ul>

@foreach ($actus as $actu)
<li> {{$actu->contenu}} ({{$actu->date_publication}}) </li>

@endforeach
</ul> --}}
@endsection