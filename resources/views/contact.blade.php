@extends ('base')

@section('content')

  </header>

    <h2 class="title_contact">CONTACT</h2>
    <div class="contact">
        <iframe class="carte" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2530.9079189349777!2d3.0695748269722385!3d50.62882736245515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d59118928ab7%3A0xd0f3b05faaf1c4c!2sLe%20Cnam!5e0!3m2!1sfr!2sfr!4v1708276647666!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      
      <p>O'cnamo</p>
      <p>5 Bd Louis XIV</p>
      <p>59800 Lille</p>
      <p>Mail :<a href="mailto:contact@ocnamo.com"> contact@ocnamo.com</a></p>
      <p>Déjeuner et Dîner !</p>
      <p>Ouvert du lundi au dimanche 12h45 à 20h</p>
      <p>Dernière arrivée à 19h30</p>
      <p>*Appels du lundi au dimanche entre 12h et 19h (avant et après nous sommes fermés)</p><br>
      <p><a href="{{ route ('main.reservation') }}">Réservation une table</a></p><br>
      <p>O'cnamo, vous découvrirez
           le premier endroit à Lille où certaines recettes ont
            été créés en 2024 et vous pourrez assister à la
             fabrication tout en dégustant un déjeuner ou un dîner
              original de votre composition !</p>
      
  </div>
    <footer>

    </footer>
  </div>
  @endsection
