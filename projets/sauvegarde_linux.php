<!doctype html>
<html lang="fr">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Automatisation Linux</title>
    <link rel="icon" type="image/svg+xml" href="../images/favicon-dev.svg" />
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="../projets.css/sauvegarde_linux.css" />
  </head>
  <body>
    <?php include '../menu.php'; ?>
    
    <div class='titre_projet'>
        <h1>Automatisation Linux : Création d'un "Agenda-Bot"</h1>
    </div>

   <div>
        <h2>Contexte et Enjeux</h2>
        <p>Dans le cadre de mon <strong>Booster Portfolio</strong>, j'ai voulu m'attaquer à un pilier de la cybersécurité : le système Linux. En entreprise, on ne peut pas tout faire à la main sur les serveurs. L'enjeu de ce projet personnel était de créer un script capable d'automatiser des tâches répétitives. Mon public cible est ici un administrateur système qui souhaite gagner du temps et sécuriser ses processus de maintenance.</p>
    </div>

    <div>
        <h2>Objectifs du projet</h2>
        <p>Le but était de concevoir un "assistant" autonome. Je devais : <br>
        Créer un script intelligent qui change de mission selon le jour de la semaine.<br>
        Automatiser son lancement sans aucune intervention humaine.<br>
        Maîtriser la gestion des droits et des fichiers en ligne de commande (Terminal).</p>
    </div>

    <div>
        <h2>Action 1 : Organisation de l'espace de travail</h2>
        <p>Pour commencer proprement, j'ai structuré mon projet directement depuis le terminal. J'ai utilisé <strong>mkdir</strong> pour créer mon dossier "MonAgenda" et <strong>cd</strong> pour m'y installer. Savoir naviguer dans l'arborescence Linux sans interface graphique est la base pour gérer n'importe quel serveur distant.</p>
        <div class='img_projet'>
            <img src="../images/commande1_linux.png" alt="Capture du terminal montrant l'organisation du dossier">
        </div>
    </div>

    <div>
        <h2>Action 2 : Développement du script Bash</h2>
        <p>J'ai rédigé mon programme <strong>agenda.sh</strong> avec l'éditeur <strong>Nano</strong>. J'ai utilisé une logique simple (si c'est lundi, fais ceci ; si c'est mardi, fais cela). Le script détecte automatiquement la date et écrit la mission du jour dans un fichier texte. C’est ici que je montre ma capacité à coder des petits outils d'administration système.</p>
        <div class='img_projet'>
            <img src="../images/script_linux.png" alt="Capture du code source Bash dans Nano">
        </div>
    </div>

    <div>
        <h2>Action 3 : Sécurisation et droits d'accès</h2>
        <p>Sous Linux, un fichier ne peut pas "agir" s'il n'en a pas le droit. J'ai utilisé la commande <strong>chmod +x</strong> pour donner les permissions d'exécution à mon script. C'est une étape cruciale en sécurité informatique : on ne donne des droits qu'à ce qui est nécessaire. J'ai vérifié le résultat avec <strong>ls -l</strong> pour m'assurer que tout était bien configuré.</p>
        <div class='img_projet'>
            <img src="../images/permission_linux.png" alt="Résultat de la commande ls -l sur les permissions">
        </div>
    </div>

    <div>
        <h2>Action 4 : Mise en place du pilote automatique (Cron)</h2>
        <p>Un assistant n'est utile que s'il travaille seul. J'ai configuré <strong>Crontab</strong>, le planificateur de tâches de Linux. J'ai programmé mon script pour qu'il s'exécute chaque minute. C'est exactement la technique qu'utilisent les entreprises pour lancer des sauvegardes ou des scans de virus pendant la nuit.</p>
        <div class='img_projet'>
             <img src="../images/crontab_linux.png" alt="Capture du fichier Crontab avec la planification">
        </div>
    </div>

    <div>
        <h2>Résultats et Bilan</h2>
        <p>Le test final a été un succès total. En utilisant la commande <strong>cat</strong>, j'ai pu voir que le système créait bien ses rapports de tâches tout seul. Ce projet s'est déroulé sans encombre et prouve que je suis à l'aise avec les commandes de base de Linux. J'ai appris à transformer une suite de commandes manuelles en un processus industriel automatisé, une compétence clé pour n'importe quel poste en infrastructure ou en cybersécurité.</p>
    </div>

    <div class='liens_code'>
        <p><strong>Environnement :</strong> Linux (Debian / Bash)</p>
        <p><strong>Outils clés :</strong> Nano, Crontab, Gestion des permissions (chmod)</p>
    </div>

    <script src="../script/script.js"></script>
  </body>
</html>