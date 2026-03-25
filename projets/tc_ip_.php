<!doctype html>
<html lang="fr">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mon Portfolio - Projet Cisco</title>
    <link rel="icon" type="image/svg+xml" href="../images/favicon-dev.svg" />
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="../projets.css/tc_ip_.css" />
  </head>
  <body>
    <?php include '../menu.php'; ?>
    
    <div class='titre_projet'>
        <h1>Mon défi Réseau : Bâtir une Infrastructure d'Entreprise</h1>
    </div>

    <p>Tout a commencé lors du <strong>Booster Portfolio</strong>. Je me suis retrouvé face à une page blanche sur le logiciel <strong>Cisco Packet Tracer</strong> avec une mission : concevoir le réseau complet d'une entreprise. Mon objectif était de créer un système où chaque ordinateur pourrait communiquer parfaitement, tout en gardant le projet accessible en <strong>local</strong> (directement sur mon PC) pour pouvoir le présenter à tout moment, même sans connexion internet.</p>

    <div>
      <h2>Étape 1 : Dessiner les routes et connecter les mondes</h2>
      <p>Imaginez que je devais construire deux petits quartiers dans une ville numérique. Pour ce projet, j'ai créé <strong>deux réseaux séparés</strong>. Pour qu'ils fonctionnent, j'ai utilisé des <strong>Switches</strong> : voyez-les comme des multiprises intelligentes qui permettent aux ordinateurs d'un même quartier de se parler. Mais pour que le quartier A puisse envoyer une lettre au quartier B, il fallait un aiguilleur : le <strong>Routeur</strong>. C'est lui qui fait le pont entre ces deux mondes.</p>
      
      <div class="img_projet">
          <img src="/images/reseaux_entier_cisco.png" alt="Vue d'ensemble du réseau Cisco">

          <em>Ici, je montre mon plan d'architecte. On y voit mes deux réseaux distincts, les câbles bien organisés et surtout les voyants verts qui prouvent que tout est bien branché.</em>
      </div>
    </div>

    <div>
      <h2>Étape 2 : Donner une identité à chaque machine</h2>
      <p>Une fois les câbles tirés, il fallait que les machines puissent s'identifier. Chaque ordinateur a besoin d'une <strong>Adresse IP</strong> (comme une adresse postale). Pour ne pas passer des heures à les noter à la main, j'ai installé un "cerveau" dans mon réseau : un <strong>Serveur</strong>.</p>
      
      <p>J'y ai configuré le <strong>DHCP</strong>, un service génial qui distribue automatiquement les adresses aux nouveaux arrivants. J'ai aussi ajouté un <strong>DNS</strong> : c'est l'annuaire du réseau. Grâce à lui, plus besoin de retenir des chiffres compliqués, on peut simplement taper un nom pour trouver une ressource.</p>

      <div class="img_projet">
          <img src="/images/dhcp_cisco.png" alt="Configuration DHCP et DNS">
          <img src="/images/dns_cisco.png" alt="Configuration DNS">
          <em>C'est la preuve que j'ai configuré les services DNS et DHCP. On y voit ma liste d'adresses programmée avec soin.</em>
      </div>
    </div>

    <div>
      <h2>Étape 3 : Le défi de la "porte de sortie" et l'erreur de câblage</h2>
      <p>C'est là que les choses deviennent sérieuses. Au début, mes deux réseaux ne se voyaient pas du tout. J'ai d'abord pensé à un problème de <strong>Passerelle par défaut</strong> (la "porte de sortie" d'un réseau), mais après vérification, le souci était plus concret : je m'étais trompé de port sur le routeur lors du branchement physique !</p>
      
      <p><strong>J'ai un peu galéré à faire transiter les données</strong> à cause de ce mauvais branchement, mais une fois le bon câble inséré au bon endroit et la configuration validée, tout est devenu fluide. J'ai confirmé la réussite avec un <strong>Ping</strong> : une commande qui envoie un signal et attend une réponse. Quand j'ai vu les paquets circuler sans aucune perte, j'ai su que ma mission était remplie.</p>
      
      <div class="img_projet">
        <img src="/images/ping_cisco.png" alt="Test de communication entre les réseaux">
          <em>C'est le moment de vérité : une capture d'écran de la console noire montrant que les deux réseaux communiquent (deux pc d'un réseau différent) enfin ensemble sans aucune erreur.</em>
      </div>
    </div>

    <div class='liens_code'>
        <h3>Envie d'explorer ma configuration ?</h3>
        <p>Mon fichier de simulation (.pkt) est disponible juste ici. C'est tout mon travail d'adressage et de routage prêt à être testé.</p>
        <br>
        <a href="../téléchargement/cisco.pkt" download="Architecture_Reseau_Willy.pkt">
            <i class="fa-solid fa-download"></i> Télécharger le fichier (.pkt)
        </a>
    </div>

    <div>
      <h2>Le mot de la fin</h2>
      <p><strong>J'ai vraiment aimé ce défi.</strong> C'était gratifiant de partir d'un écran vide pour arriver à une infrastructure complexe qui communique parfaitement. En <strong>Cybersécurité</strong>, on ne peut pas protéger ce qu'on ne comprend pas. Ce projet m'a donné les bases solides dont j'ai besoin : pour bien défendre un château, il faut d'abord savoir comment on en a posé chaque brique !</p>
    </div>

    <script src="../script/script.js"></script>
  </body>
</html>