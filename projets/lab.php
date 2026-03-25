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
        <h1>Automatisation LAB PowerShell</h1>
    </div>

    <p>Ce projet de cours consistait à développer un script <strong>PowerShell</strong> capable de construire automatiquement une structure de dossiers complexe 
    L'objectif est de gagner du temps et d'éviter les erreurs humaines lors de la mise en place d'un environnement de travail pour une entreprise</p>

    <div>
        <h2>1. Développement du script dans PowerShell ISE</h2>
        <p>Pour concevoir cet outil, j'ai utilisé l'environnement de développement <strong>PowerShell ISE</strong> qui permet d'écrire et de tester le code proprement 
        Le script utilise des <strong>Variables</strong> pour stocker le nom de l'entreprise et un <strong>Tableau (Array)</strong> qui contient ma liste de services comme la Direction, l'Info ou les RH</p>
        
        <p>La logique repose sur une boucle <strong>ForEach</strong> qui répète la création pour chaque service de la liste 
        J'ai intégré une condition <strong>IF (Test-Path)</strong> pour vérifier si le dossier existe déjà avant de le créer, ce qui évite les messages d'erreur du système 
        Enfin, le <strong>Pipeline (|)</strong> permet d'envoyer du texte directement dans un fichier de preuve à l'intérieur de chaque nouveau dossier</p>

        <div class="img_projet">
            <img src="/images/script_powsershel.png" alt="">
            <em>Aperçu de la structure du script avec les variables et la boucle de création</em>
        </div>
        
    </div>

    <div>
        <h2>2. Exécution dans la console</h2>
        <p>Une fois le code validé, je l'ai exécuté via la console PowerShell 
        Le script traite l'intégralité de la liste en moins d'une seconde, garantissant qu'aucun dossier n'est oublié et qu'aucune faute de frappe n'est commise dans les noms des services</p>

        <div class="img_projet">
            <img src="/images/console_powershell.png" alt="">
            <em>Affichage du succès de l'opération dans l'invité de commande PowerShell</em>
        </div>
        
    </div>

    <div>
        <h2>3. Résultat final : L'arborescence Windows</h2>
        <p>Le résultat est visible instantanément dans l'explorateur de fichiers 
        Le script a créé un dossier racine sur le disque <strong>C:</strong>, puis tous les sous-dossiers demandés, chacun contenant un petit fichier texte automatique servant de preuve de bon fonctionnement</p>

        <div class="img_projet">
            <img src="/images/dosssiers_powershel.png" alt="">
            <em>Vue des dossiers Direction, Info et RH créés automatiquement sur le disque local</em>
        </div>
        
    </div>

    <div class='liens_code'>
        <h3>Conclusion technique</h3>
        <p>Ce projet d'automatisation prouve qu'un simple script peut remplacer des dizaines de clics manuels 
        C'est une compétence essentielle pour un administrateur système qui souhaite gérer efficacement un parc informatique de grande taille</p>
    </div>

    <div>
      <h2>Perspectives</h2>
      <p>À l'avenir, ce même script pourrait être amélioré pour attribuer automatiquement des droits d'accès différents à chaque service ou pour créer des comptes utilisateurs sur un serveur</p>
    </div>

    <script src="../script/script.js"></script>
  </body>
  
</html>