

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
    '<div class="carrousel-stack">' +
    '  <div class="piste-carrousel">' +
         elementsHTML + elementsHTML +
    '  </div>' +
    '</div>';
}


function creerMenuBurger() {

  // On récupère la barre de navigation et la liste des liens
  var navigation = document.querySelector('.nav');
  var listeLiens = navigation ? navigation.querySelector('ul') : null;

  // Si la navigation n'existe pas, on arrête
  if (!navigation || !listeLiens) {
    return;
  }

  // On donne un id à la liste pour l'accessibilité
  listeLiens.id = 'mainMenu';

  // On crée le bouton burger (les 3 barres)
  var bouton = document.getElementById('burgerMenuBtn');
  if (!bouton) {
    bouton = document.createElement('button');
    bouton.id = 'burgerMenuBtn';
    bouton.type = 'button';
    bouton.setAttribute('aria-label', 'Ouvrir le menu');
    bouton.setAttribute('aria-controls', 'mainMenu');
    bouton.setAttribute('aria-expanded', 'false');
    bouton.innerHTML = '<span></span><span></span><span></span>';
    navigation.insertBefore(bouton, listeLiens);
  }

  // On crée le fond sombre qui apparaît derrière le menu
  var fondSombre = document.getElementById('menuOverlay');
  if (!fondSombre) {
    fondSombre = document.createElement('div');
    fondSombre.id = 'menuOverlay';
    document.body.appendChild(fondSombre);
  }

  // On récupère tous les liens du menu
  var tousLesLiens = listeLiens.querySelectorAll('li a');


  // Fonction pour ouvrir le menu
  function ouvrirMenu() {
    bouton.classList.add('active');
    listeLiens.classList.add('active');
    fondSombre.classList.add('active');
    document.body.style.overflow = 'hidden';
    bouton.setAttribute('aria-expanded', 'true');
  }

  // Fonction pour fermer le menu
  function fermerMenu() {
    bouton.classList.remove('active');
    listeLiens.classList.remove('active');
    fondSombre.classList.remove('active');
    document.body.style.overflow = '';
    bouton.setAttribute('aria-expanded', 'false');
  }

  // Quand on clique sur le bouton burger : ouvrir ou fermer
  bouton.addEventListener('click', function (e) {
    e.preventDefault();
    e.stopPropagation();
    if (bouton.classList.contains('active')) {
      fermerMenu();
    } else {
      ouvrirMenu();
    }
  });

  // Quand on clique sur le fond sombre : fermer le menu
  fondSombre.addEventListener('click', function () {
    fermerMenu();
  });

  // Quand on clique sur un lien du menu
  tousLesLiens.forEach(function (lien) {
    lien.addEventListener('click', function (e) {
      var destination = this.getAttribute('href');

      // Si c'est un lien vers une section de la page (#)
      if (destination && destination.startsWith('#')) {
        e.preventDefault();
        var cible = document.querySelector(destination);
        fermerMenu();
        if (cible) {
          cible.scrollIntoView({ behavior: 'auto', block: 'start' });
        }
        return;
      }

      // Sinon on ferme juste le menu
      fermerMenu();
    });
  });

  // Touche Échap = fermer le menu
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && bouton.classList.contains('active')) {
      fermerMenu();
    }
  });

  // Si on agrandit la fenêtre, on ferme le menu mobile
  window.addEventListener('resize', function () {
    if (window.innerWidth > 980 && bouton.classList.contains('active')) {
      fermerMenu();
    }
  });
}


/* --- Lancement au chargement de la page --- */
document.addEventListener('DOMContentLoaded', function () {
  creerMenuBurger();
  creerCarrousel();
});
