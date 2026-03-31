

/* --- Fonction : Créer le carrousel des technologies --- */
function creerCarrousel() {

  // On récupère la div qui va contenir le carrousel
  var carrousel = document.getElementById('carousel');

  // Si la div n'existe pas sur la page, on arrête
  if (!carrousel) {
    return;
  }

  // Liste de toutes les technologies à afficher
  var technologies = [
    { icone: 'fab fa-html5',         nom: 'HTML' },
    { icone: 'fab fa-css3-alt',      nom: 'CSS' },
    { icone: 'fab fa-js',            nom: 'JavaScript' },
    { icone: 'fab fa-php',           nom: 'PHP' },
    { icone: 'fab fa-react',         nom: 'React' },
    { icone: 'fab fa-wordpress',     nom: 'WordPress' },
    { icone: 'fab fa-figma',         nom: 'Figma' },
    { icone: 'fab fa-linux',         nom: 'Linux' },
    { icone: 'fab fa-docker',        nom: 'Docker' },
    { icone: 'fas fa-code',          nom: 'TypeScript' },
    { icone: 'fas fa-network-wired', nom: 'Packet Tracer' }
  ];

  // On crée le HTML pour chaque technologie
  var elementsHTML = '';
  for (var i = 0; i < technologies.length; i++) {
    elementsHTML += '<div class="logo-tech">';
    elementsHTML += '  <i class="' + technologies[i].icone + '"></i>';
    elementsHTML += '  <span>' + technologies[i].nom + '</span>';
    elementsHTML += '</div>';
  }

  // On met le contenu dans la div (doublé pour l'effet de boucle infinie)
  carrousel.innerHTML =
    '<div class="piste-carrousel">' +
       elementsHTML + elementsHTML +
    '</div>';
}


function creerMenuBurger() {

  var bouton = document.getElementById('burgerMenuBtn');
  if (!bouton) return;

  // Clic sur le bouton burger = ouvrir / fermer
  bouton.addEventListener('click', function () {
    document.body.classList.toggle('menu-open');
  });

  // Clic sur le fond sombre = fermer
  document.getElementById('menuOverlay').addEventListener('click', function () {
    document.body.classList.remove('menu-open');
  });

  // Clic sur un lien = fermer
  document.querySelectorAll('#mainMenu a').forEach(function (lien) {
    lien.addEventListener('click', function () {
      document.body.classList.remove('menu-open');
    });
  });
}


/* --- Lancement au chargement de la page --- */
document.addEventListener('DOMContentLoaded', function () {
  creerMenuBurger();
  creerCarrousel();
});
