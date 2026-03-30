<!doctype html>
<html lang="fr">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Projet Cisco - Infrastructure Réseau</title>
    <link rel="icon" type="image/svg+xml" href="../images/favicon-dev.svg" />
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="../projets.css/tc_ip_.css" />
  </head>
  <body>
    <?php include '../menu.php'; ?>
    
    <div class='titre_projet'>
        <h1>Architecture Réseau : Bâtir une Infrastructure d'Entreprise</h1>
    </div>

    <div>
        <h2>Contexte et Enjeux</h2>
        <p>Ce projet a été réalisé durant mon <strong>Booster Portfolio</strong>. La mission était de concevoir de A à Z le réseau informatique d'une entreprise virtuelle sur <strong>Cisco Packet Tracer</strong>. L'enjeu principal était de créer une architecture solide, fonctionnelle et surtout disponible en <strong>local</strong> pour pouvoir faire une démonstration technique à tout moment, même sans connexion internet.</p>
    </div>

    <div>
        <h2>Objectifs du projet</h2>
        <p>Le but était de construire un système complet où : <br>
         Deux réseaux distincts peuvent communiquer entre eux via un routage efficace.<br>
        Les adresses des machines sont gérées automatiquement (DHCP).<br>
        Les utilisateurs peuvent utiliser des noms simples au lieu de chiffres pour se connecter (DNS).</p>
    </div>

    <div>
      <h2>Action 1 : Dessiner les routes et connecter les mondes</h2>
      <p>J'ai commencé par créer deux "quartiers" numériques séparés. Pour cela, j'ai utilisé des <strong>Switches</strong>, qui permettent aux ordinateurs d'un même service de se parler. Mais pour que le quartier A communique avec le quartier B, j'ai dû configurer un <strong>Routeur</strong>. C'est lui qui sert d'aiguilleur et de pont entre les différentes parties de l'entreprise.</p>
      
      <div class="img_projet">
          <img src="../images/reseaux_entier_cisco.png" alt="Vue d'ensemble du réseau Cisco">
          <em>Preuve : Mon plan d'architecte réseau avec les deux zones et les voyants verts validant la connexion.</em>
      </div>
    </div>

    <div>
      <h2>Action 2 : Automatiser l'identité des machines (DHCP/DNS)</h2>
      <p>Pour éviter de configurer chaque ordinateur à la main (ce qui prendrait des heures), j'ai mis en place un <strong>Serveur</strong> central. <br><br>
      J'y ai configuré le service <strong>DHCP</strong> pour distribuer automatiquement les adresses IP aux nouveaux PC connectés. J'ai aussi ajouté un <strong>DNS</strong>, qui fait office d'annuaire : il permet de taper un nom de domaine pour trouver une ressource sur le réseau, rendant l'utilisation beaucoup plus simple pour les employés.</p>
      
      <div class="img_projet">
          <img src="../images/dhcp_cisco.png" alt="Configuration DHCP">
          <img src="../images/dns_cisco.png" alt="Configuration DNS">
          <em>Action : Configuration des services DNS et DHCP pour automatiser la gestion des adresses.</em>
      </div>
    </div>

    <div>
      <h2>Action 3 : Diagnostic et résolution de panne</h2>
      <p>Lors des premiers tests, mes deux réseaux ne communiquaient pas du tout. J'ai d'abord vérifié ma <strong>passerelle par défaut</strong> (la "porte de sortie"), mais le souci était physique : je m'étais trompé de port sur le routeur lors du branchement des câbles virtuels ! <br><br>
      <strong>J'ai un peu galéré</strong> à cause de ce mauvais branchement, mais cela m'a permis de pratiquer le diagnostic de panne. Une fois le câble remis sur le bon port et la configuration validée, j'ai lancé un <strong>Ping</strong> entre deux PC de réseaux différents. Le signal est passé instantanément, prouvant que le routage fonctionnait enfin.</p>
      
      <div class="img_projet">
        <img src="../images/ping_cisco.png" alt="Test de communication réussi">
        <em>Résultat : La console confirme que les données circulent entre les deux réseaux sans aucune perte.</em>
      </div>
    </div>

    <div class='liens_code'>
        <h3>Livrable Technique</h3>
        <p>Mon fichier de simulation (.pkt) est mon livrable principal. Il contient toute la configuration d'adressage et de routage que j'ai réalisée.</p>
        <br>
        <a href="../téléchargement/cisco.pkt" download="Architecture_Reseau_Willy.pkt">
            <i class="fa-solid fa-download"></i> Télécharger le fichier (.pkt)
        </a>
    </div>

    <div>
      <h2>Bilan et Perspectives</h2>
      <p>Ce projet m'a donné des bases solides : on ne peut pas protéger un réseau si on ne sait pas comment il est construit. Passer d'un écran vide à une infrastructure qui communique parfaitement a été très gratifiant. J'ai appris que dans le réseau, la rigueur du câblage est aussi importante que la configuration du code.</p>
    </div>

    <script src="../script/script.js"></script>
  </body>
</html>