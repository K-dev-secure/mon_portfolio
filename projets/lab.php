<!doctype html>
<html lang="fr">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio - Automatisation PowerShell</title>
    <link rel="icon" type="image/svg+xml" href="../images/favicon-dev.svg" />
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="../projets.css/lab.css" />
  </head>
  <body>
    <?php include '../menu.php'; ?>
    
    <div class='titre_projet'>
        <h1>Automatisation : Déploiement d'arborescence via PowerShell</h1>
    </div>

    <div>
        <h2>Contexte et Enjeux</h2>
        <p>Ce projet de cours consistait à répondre à une problématique courante en entreprise : comment créer rapidement et sans erreur une structure de dossiers complexe pour un nouveau client ou un nouveau projet ? L'enjeu est de remplacer les dizaines de clics manuels par un script <strong>PowerShell</strong> capable de tout automatiser en une seconde.</p>
    </div>

    <div>
        <h2>Objectifs du projet</h2>
        <p>Le but était de développer un outil fiable capable de : <br>
         Créer une architecture de dossiers hiérarchisée (Direction, RH, Informatique, etc.). <br>
         Vérifier l'existence des dossiers pour éviter les erreurs. <br>
         Générer un fichier de preuve dans chaque dossier pour confirmer le bon fonctionnement.</p>
    </div>

    <div>
        <h2>Action 1 : Développement dans PowerShell ISE</h2>
        <p>Pour concevoir le script, j'ai utilisé l'environnement <strong>PowerShell ISE</strong>. J'ai structuré mon code en utilisant des <strong>Variables</strong> pour le nom de l'entreprise et un <strong>Tableau (Array)</strong> pour la liste des services. <br><br>
        Le cœur du script repose sur une boucle <strong>ForEach</strong> : elle parcourt ma liste et exécute la création pour chaque service. J'ai ajouté une condition <code>if (Test-Path)</code> : c'est une sécurité qui vérifie si le dossier existe déjà avant de tenter de le créer, ce qui évite de polluer la console avec des messages d'erreur rouges.</p>

        <div class="img_projet">
            <img src="/images/script_powsershel.png" alt="Aperçu du script PowerShell ISE">
            <em>Preuve : Structure du script avec la boucle ForEach et la condition de test.</em>
        </div>
    </div>

    <div>
        <h2>Action 2 : Test et exécution en console</h2>
        <p>Une fois le code écrit, je l'ai lancé directement dans la console PowerShell. C'est l'étape de vérité : le script traite toute la liste instantanément. Contrairement à une création manuelle, ici il n'y a aucune faute de frappe possible dans le nom des dossiers et aucun service n'est oublié. C'est un gain de temps énorme pour un administrateur système.</p>

        <div class="img_projet">
            <img src="/images/console_powershell.png" alt="Exécution du script dans la console">
            <em>Action : Lancement du script et retour visuel du succès de l'opération.</em>
        </div>
    </div>

    <div>
        <h2>Action 3 : Vérification du résultat final</h2>
        <p>Le résultat est immédiat dans l'explorateur Windows. Le script a généré le dossier racine sur le disque <strong>C:</strong> et tous les sous-dossiers correspondants. À l'intérieur de chaque dossier, un fichier texte a été créé automatiquement via le <strong>Pipeline (|)</strong>, servant de rapport pour prouver que le dossier est bien accessible en écriture.</p>

        <div class="img_projet">
            <img src="/images/dosssiers_powershel.png" alt="Résultat de l'arborescence dans Windows">
            <em>Résultat : L'arborescence complète créée proprement sur le disque local.</em>
        </div>
    </div>

    <div>
        <h2>Résultats et Bilan</h2>
        <p>Ce projet prouve qu'un petit script bien pensé peut remplacer un travail manuel long et fastidieux. J'ai appris à manipuler les bases de l'automatisation système (boucles, variables, conditions). C’est une compétence que je pourrai faire évoluer, par exemple pour créer automatiquement des comptes utilisateurs ou gérer des droits d'accès sur un serveur d'entreprise.</p>
    </div>

    <script src="../script/script.js"></script>
  </body>
</html>