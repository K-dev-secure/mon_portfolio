<?php
// Menu du site - à inclure sur toutes les pages avec: include 'menu.php';
// Lien Accueil dynamique selon la page
$current = basename($_SERVER['PHP_SELF']);
$accueil = ($current == 'index.html' || $current == 'index.php')
  ? '#accueil'
  : '../index.html';
$about = ($current == 'index.html' || $current == 'index.php')
  ? '#about'
  : '../index.html#about';
$projets = ($current == 'index.html' || $current == 'index.php')
  ? '#projets'
  : '../index.html#projets';
$contact = ($current == 'index.html' || $current == 'index.php')
  ? '#contact'
  : '../index.html#contact';
?>
<header>
  <nav class="nav">
    <button id="burgerMenuBtn" type="button" aria-label="Ouvrir le menu" aria-controls="mainMenu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
    <ul id="mainMenu">
      <li><a href="<?= $accueil ?>">Accueil</a></li>
      <li><a href="<?= $about ?>">À propos</a></li>
      <li><a href="<?= $projets ?>">Projets</a></li>
      <li class="bouton-contact"><a href="<?= $contact ?>">Contact</a></li>
    </ul>
  </nav>
</header>
<div id="menuOverlay"></div>
