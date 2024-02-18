@extends('base')

@section('title', 'Accueil')

@section('content')
<h1>Bienvenue chez nous !</h1>

<div class="carousel">
  <div class="carousel_items">
    <img src="Image/plats.jpg" alt="" class="carousel_img">
    <img src="Image/plats.jpg" alt="" class="carousel_img">
    <img src="Image/resto.jpg" alt="" class="carousel_img">
    <img src="Image/Delicieusepizza.jpg" alt="" class="carousel_img">
  </div>
</div>


    <div class="actu">

        <h2> Un an déjà!</h2> <br>
        <p>Ocnamo a un an déjà ! Nous avons vraiment pas vu le temps filer, et vous ? <br>
            On compte fêter le premier anniversaire de notre restaurant le 23 février prochain, attendez-vous à quelques surprises !  </p> <br>

    <h2> Nocturne détente estivale</h2>
    <p>Vous ne savez pas où aller pendant les soirées d’été ? <br> 
        Chez Ocnamo, on vous couvre avec nos soirées détente tout en douceur avec notre sélection musicale chill et nos nouveaux cocktails rafraîchissants !
        On vous attends chaque jeudi et en ouverture exceptionnelle dimanche soir durant les mois de juillet et août ! <br>
        
        À bientôt !</p> <br>

    <h2> Cours de cuisine</h2> <br>
    <p>Vous étiez nombreux à l’avoir demandé et elle rêvait de donner vie à cette activité, Nous vous annonçons avec joie le début des cours de cuisine ! <br>
        Mahoro elle même vous accueillera dans notre restaurant afin de vous proposer des cours en petit commités afin d’être entièrement disponible pour vous ! <br>
        D’ailleurs, du 20/04/2023 au 20/05/2023, vous pouvez participer à une tombola afin de gagner un cours gratuit !
        
      </p> <br>
      <a href="{{ route ('main.cours') }}">Inscrivez-vous dès maintenant sur en suivant ce lien ! </a> <br>
<br>
        <h2>1 mois déjà</h2> <br>
        <p>Cela fait déjà 1 mois que nous avons ouvert nos portes et que vous nous avez submergé ! Nous sommes ravis de voir que notre cuisine vous plaît et on espère vous revoir bientôt !
        Restez à l’écoute car nous aurons bientôt une annonce à vous faire !</p>

        <h2>On l’a fait! Notre projet de restaurant démarre !</h2> <br>
        <p> Ce jour est à marquer d’une pierre blanche pour nous, cette idée de restaurant qui nous tenait tant à cœur est enfin venu au monde ! <br>
            Nous avons hâte de vous recevoir et n’hésitez-pas à consulter nos réseaux sociaux afin d’être à l’affût de nos dernières créations !</p>
        </div>
            
            
            {{-- <ul>

@foreach ($actus as $actu)
<li> {{$actu->contenu}} ({{$actu->date_publication}}) </li>

@endforeach
</ul> --}}
@endsection