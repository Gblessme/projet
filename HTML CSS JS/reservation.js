document.getElementById('search').addEventListener('click', function() {
    document.getElementById('search').innerText = 'Réserver maintenant';
  });

  function toggleLanguages() {
    var languageBtn = document.getElementById('languageBtn');
    languageBtn.style.display = (languageBtn.style.display === 'none') ? 'block' : 'none'; // Affiche puis masque après sélection
  }

  // Fonction pour sélectionner une langue 
  function selectLanguage(lang) {
    console.log(`Langue sélectionnée :${lang}`);
 }

 

