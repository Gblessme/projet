@extends('base')

@section('title', 'Accueil')

@section('content')

    <div class="photocours">
    <img src="Image/cours.jpeg" alt="">
    </div>

    <div class="coursbox">
        <h2>Inscrivez-vous dés mainteant à nos cours de cuisine !</h2>
        
        <p>Mahoro vous accueillera les mercredi et dimanche après-midi pour ses cours de cuisine. <br>
            Le mercredi vous apprendrez à faire toute sortes de plats et le dimanche vous pourrez cuisiner de délicieux desserts afin de terminer la semaine en douceur. <br>
            Le matériel de cuisine et les ingrédients sont fournis, il vous suffira juste de payer la participation. <br>
            Les places sont limitées alors si un créneau vous plaît, n’hésitez-pas à le prendre ! <br>
            <br>
            Mercredi: 14h30-17h30 <br>
            Dimanche: 13h30-16h30 <br>
            Tarif: 30€ la leçon <br>
            pack mensuel: 200€ <br>
            <br>
        </div>

        <div class="cours"></div>
Inscrivez-vous dès maintenant en complétant ce formulaire: </p>
<fieldset>

    <div class="formulaire">
    <form action="" method="POST">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" min="3" max="50" required>
        </div>
        <div class="formulaire">
    <label for="inscription">Inscription pour le prochain</label>
<select name="inscription" id="inscription">
        <option value=""></option>
        <option value="Mercredi">Mercredi</option>
        <option value="Dimanche">Dimanche</option>
    </div>
</select>

<form>
    <p>Veuillez choisir votre mode de paiement :</p>
    <div class="formulaire">
        <p>Carte bleue:</p>
      <input type="radio" id="CB" name="paiement" />
      <label for="paymentChoice1"></label>
  
      <p>Sur place</p>
      <input type="radio" id="Sur place" name="paiement"  />
      <label for="paymentChoice2"></label>
  
    </div>
    <div class="formulaire">
      <button type="submit">Envoyer</button>
    </div>
  </form>
  <pre id="log"></pre>
  
</fieldset>

@endsection