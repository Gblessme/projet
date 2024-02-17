// Déclaration d'une variable globale "cart" qui stocke les articles sélectionnés dans le panier.
let cart = [];

// Fonction appelée lorsque l'utilisateur clique sur le bouton "Ajouter au panier".
function addToCart(button) {
    // Récupération de l'élément parent du bouton (qui est l'élément contenant les informations de l'article).
    let item = button.parentNode;
    // Récupération du nom et du prix de l'article à partir des attributs de données HTML.
    let itemName = item.dataset.name;
    let itemPrice = parseFloat(item.dataset.price);

    cart.push({ name: itemName, price: itemPrice });// Ajout de l'article au panier sous forme d'objet avec le nom et le prix.

    updateCart();// Mise à jour de l'affichage du panier.
}  

// Fonction pour mettre à jour l'affichage du panier.
function updateCart() {
    // Récupération des éléments HTML nécessaires.
    let cartList = document.getElementById("cart-items");
    let totalElement = document.getElementById("total");
    let total = 0;// Initialisation du total à zéro.
       
    cartList.innerHTML = "";// Effacement du contenu actuel du panier.

    // Parcours de chaque article dans le panier.
    cart.forEach(item => {
        let listItem = document.createElement("li");// Création d'un élément de liste pour chaque article.
        listItem.textContent = `${item.name} - ${item.price.toFixed(2)} €`;// Attribution du texte à l'élément de liste avec le nom et le prix de l'article.
        cartList.appendChild(listItem);// Ajout de l'élément de liste au panier.

        total += item.price; // Ajout du prix de l'article au total.
    });    
    
    totalElement.textContent = `Total : ${total.toFixed(2)} €`;// Mise à jour du texte affichant le total dans le panier.
}

function placeOrder() {
    // Logique pour passer la commande, par exemple, envoyer une requête au serveur
    console.log("Commande passée :", cart);
    alert("Commande passée avec succès!");
    cart = []; // Réinitialiser le panier après la commande
    updateCart();
}
