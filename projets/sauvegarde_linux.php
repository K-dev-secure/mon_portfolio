<!doctype html>
<html lang="fr">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>V2 Portfolio</title>
    <link rel="icon" type="image/svg+xml" href="../images/favicon-dev.svg" />
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="../projets.css/sauvegarde_linux.css" />
  </head>
  <body>
    <?php include '../menu.php'; ?>
    
    <div class='titre_projet'>
        <h1>Automatisation Linux : Création d'un "Agenda-Bot"</h1>
    </div>

    <p>Ce projet personnel est né d'une volonté de plonger au cœur des systèmes Unix. En cybersécurité, la maîtrise de Linux est fondamentale : j'ai donc conçu un script Bash capable de générer des tâches quotidiennes de maintenance et de les automatiser totalement. Ce travail me permet de démontrer ma capacité à naviguer dans l'arborescence système, à manipuler des fichiers et à programmer des outils d'administration sans interface graphique.</p>

    <div>
        <h2>Étape 1 : Architecture et Navigation Système</h2>
        <p>Pour débuter, j'ai structuré mon environnement de travail en ligne de commande. J'ai utilisé la commande <strong>mkdir</strong> pour créer un répertoire dédié nommé "MonAgenda", puis je me suis déplacé à l'intérieur avec <strong>cd</strong>. Cette étape, bien que simple, illustre ma connaissance de la hiérarchie des fichiers Linux et ma capacité à organiser proprement un projet technique directement depuis le terminal.</p>
    </div>

    <div class='img_projet'>
        <img src="../images/commande1_linux.png" alt="Capture du terminal montrant mkdir, cd et ls pour prouver l'organisation du dossier">
    </div>

    <div>
        <h2>Étape 2 : Développement du Script Shell (Bash)</h2>
        <p>Le cœur du projet repose sur le fichier <strong>agenda.sh</strong>, que j'ai rédigé avec l'éditeur de texte <strong>Nano</strong>. J'ai programmé une logique conditionnelle (if/elif/else) qui s'adapte automatiquement à la date du jour. Le script récupère le nom du jour via la variable système <em>date +%A</em> et inscrit une mission spécifique dans un fichier de sortie (ex: Mises à jour le lundi, Sauvegardes le mercredi). C'est ici que je démontre mes bases en algorithmique appliquée au scripting système.</p>
    </div>

    <div class='img_projet'>
        <img src="../images/script_linux.png" alt="Capture de l'éditeur Nano affichant le code source Bash avec la coloration syntaxique">
    </div>

    

    <div>
        <h2>Étape 3 : Sécurité et Gestion des Permissions</h2>
        <p>Sous Linux, la sécurité est stricte : un fichier texte n'est pas exécutable par défaut. J'ai utilisé la commande <strong>chmod +x</strong> pour modifier les droits d'accès et transformer mon script en un véritable programme autonome. J'ai ensuite vérifié ce changement avec <strong>ls -l</strong>, m'assurant que les attributs d'exécution étaient correctement positionnés. C'est une manipulation clé pour comprendre comment on sécurise ou autorise des processus sur un serveur.</p>
    </div>

    <div class='img_projet'>
        <img src="../images/permission_linux.png" alt="Résultat de ls -l montrant le fichier agenda.sh en vert ou avec les droits 'x' activés">
    </div>

    <div>
        <h2>Étape 4 : Automatisation avec le démon Cron</h2>
        <p>Pour que mon assistant soit réellement utile, il devait travailler seul. J'ai configuré le planificateur de tâches <strong>Crontab</strong> pour qu'il déclenche mon script chaque minute. En ajoutant la ligne de planification avec les "5 étoiles" pointant vers mon script, j'ai rendu le système totalement indépendant. Cette compétence est essentielle en entreprise pour automatiser les sauvegardes ou les scans de vulnérabilités sans intervention humaine.</p>
    </div>

    <div class='img_projet'>
        <p>[PHOTO 4 : Capture de ton fichier Crontab ouvert avec la ligne de planification programmée]</p>
    </div>

    

    <div>
        <h2>Étape 5 : Validation et Absence de difficultés</h2>
        <p>Le test final a consisté à laisser le système agir en arrière-plan. Après une minute, j'ai utilisé la commande <strong>cat</strong> pour lire le fichier généré automatiquement. Le résultat était parfait : le rapport était daté et la mission du jour correctement inscrite. Ce projet s'est déroulé sans difficulté majeure, ce qui confirme mon aisance croissante avec les commandes fondamentales de Linux (renommer, déplacer, éditer et exécuter).</p>
    </div>

    <div class='img_projet'>
        <img src="../images/message_reussi_linux.png" alt="Capture finale montrant le contenu du fichier tache.txt généré par le bot">
    </div>

    <div>
        <h2>Bilan : Maîtrise de l'administration Linux</h2>
        <p>Ce projet personnel prouve que je possède les bases pour administrer un système Linux. Entre le scripting Bash, la gestion des permissions Unix et l'automatisation via Cron, j'ai pu valider des compétences techniques directement applicables en milieu professionnel.</p>
    </div>

    <div class='liens_code'>
        <p><strong>Environnement :</strong> Linux (Bash / Debian)</p>
        <p><strong>Outils utilisés :</strong> Nano, Crontab, chmod</p>
    </div>

    <script src="../script/script.js"></script>
  </body>
</html>
