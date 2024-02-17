@extends ('base')

@section('content')


<section>
    <form action="{{route ('main.reservation.store')}}" method="POST">
        @csrf  
        <div class="container">
            <button aria-label="Sélectionner la langue" onclick="toggleLanguages()">Langue</button>
            <div id="languageBtn" style="display: none;">
                <button aria-label="Français" onclick="selectLanguage('fr')">Français</button>
                <button aria-label="Anglais" onclick="selectLanguage('en')">Anglais</button>
                <button aria-label="Espagnol" onclick="selectLanguage('es')">Espagnol</button>
                <button aria-label="Italien" onclick="selectLanguage('it')">Italien</button>
            </div>
            <h2>Réservation O'Cnamo</h2>
            <p class="mes">Nos réservations s'effectuent uniquement en ligne ! Pour le week-end : vous allez recevoir 
                un sms pour re-confirmer votre venue, merci d'y répondre. Sans nouvelle de votre part, 
                la réservation sera automatiquement annulée, nous avons beaucoup trop de réservations 
                non honorées ! Merci de votre compréhension et à très vite :)</p> 
            <form action="#" method="post">
                
                <div>
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" min="3" max="50" value="{{ old('nom') }}" not-required>
                    @error('nom')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
        
            
                <div>
                    <label for="couverts">Nombre de couverts</label>
                    <input type="number" name="couverts" id="couverts" min="1" max="16" value="{{ old('couverts') }}" not-required>
                    @error('couverts')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div>
                    <label for="heure">Heure</label>
                   <select name="heure" id="heure" not-required>
                    <option value=""></option>
                    @foreach ($heures as $heure)
                        <option value="{{ $heure }}" {{ old('heure') == $heure ? 'selected' : ''}}>{{ $heure }}</option>
                    @endforeach
                   </select>
                   @error('heure')
                   <div class="invalid-feedback">{{ $message }}</div>
                   @enderror
                </div>
                <div>
                    <label for="jour">Jour</label>
                    <input type="date" name="jour" id="jour" min="{{ date ('Y-m-d') }}" value="{{ old('jour') }}" not-required>
                    @error('jour')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="location">Emplacement:</label>
                    <select id="location" name="location" not-required>
                        <option value=""></option>
                        <option value="interior">Salle Intérieur</option>
                        <option value="exterior">Terrasse</option>
                    </select>
                    @error('location')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                </div>    
            
            
            </form>
            
            <div>
                <label for="telephone">Numéro de téléphone</label>
            <input type="phone" name="telephone" id="telephone" value="{{ old('telephone') }}" not-required>
            @error('telephone')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="commentaires">Commentaires</label>
            <textarea name="" id="commentaires" cols="30" rows="10">{{ old('commentaires') }}</textarea>
            @error('commentaire')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <button type="submit">Réserver</button>
        </div>
    </div>     
    </form>
</section>

@endsection