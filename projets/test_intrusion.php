<!doctype html>
<html lang="fr">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Test d'intrusion - Audit DVWA</title>
    <link rel="icon" type="image/svg+xml" href="../images/favicon-dev.svg" />
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="../projets.css/test_intrusion.css" />
  </head>
  <body>
    <?php include '../menu.php'; ?>

    <div class='titre_projet'>
        <h1>Audit Offensif : Pentest sur l'application DVWA</h1>
    </div>

    <div>
        <h2>Contexte et Enjeux</h2>
        <p>Ce projet a été réalisé durant mon cursus en Cybersécurité. L'objectif était de me mettre dans la peau d'un auditeur pour tester la sécurité d'une application volontairement vulnérable appelée <strong>DVWA</strong>. L'enjeu est crucial : comprendre comment un attaquant pense pour mieux protéger les infrastructures réelles des entreprises.</p>
    </div>

    <div>
        <h2>Objectifs du projet</h2>
        <p>Le but était d'identifier, d'exploiter puis de proposer des solutions pour trois types de failles majeures : l'Injection SQL, le XSS et le vol de session. Tout cela devait se faire dans un environnement 100% sécurisé et isolé.</p>
    </div>

    <div>
        <h2>Action 1 : Installation du laboratoire VirtualBox</h2>
        <p>Pour travailler sans risque, j'ai créé un réseau fermé sur <strong>VirtualBox</strong>. J'ai utilisé deux machines : <strong>Kali Linux</strong> pour les outils d'attaque et <strong>Metasploitable 2</strong> comme cible. J'ai configuré les machines pour qu'elles puissent communiquer entre elles via un "ping", mais sans jamais avoir accès au réseau internet extérieur, pour garantir une sécurité totale.</p>

        <div class="img_projet">
           <img src="../images/ping_offensive.png" alt="Terminal montrant la communication entre Kali et la cible">
           <em>Preuve : Ma machine Kali (attaquant) reçoit bien une réponse de la cible.</em>
        </div>
    </div>

    <div>
        <h2>Action 2 : Injection SQL et détournement de données</h2>
        <p>J'ai repéré un formulaire de recherche qui ne protégeait pas ses entrées. En utilisant la commande <strong>1' OR '1'='1</strong>, j'ai réussi à tromper la base de données. Comme cette condition est toujours vraie, le serveur m'a renvoyé l'intégralité des comptes utilisateurs, noms et codes secrets, au lieu d'un seul résultat. C'est une faille critique qui permet de vider une base de données en quelques secondes.</p>

        <div class="img_projet">
            <img src="../images/utilisateur_infiltrer.png" alt="Interface DVWA affichant tous les comptes volés">
            <em>Résultat : Accès complet à la liste des utilisateurs de la plateforme.</em>
        </div>
    </div>

    <div>
        <h2>Action 3 : Faille XSS et vol de Cookies</h2>
        <p>J'ai testé si le site acceptait du code JavaScript malveillant. En injectant un petit script d'alerte, j'ai réussi à faire apparaître le cookie de session (le jeton d'identité) directement à l'écran. Cette faille, appelée <strong>XSS Reflected</strong>, montre qu'un pirate pourrait voler l'accès à un compte sans même connaître le mot de passe, simplement en envoyant un lien piégé à une victime.</p>

        <div class="img_projet">
            <img src="../images/faille_xss.png" alt="Alerte JavaScript affichant le cookie de session">
            <em>Preuve : Le site exécute mon code et affiche les données sensibles du navigateur.</em>
        </div>
    </div>

    <div>
        <h2>Action 4 : Écoute réseau avec Netcat</h2>
        <p>Pour finir, j'ai utilisé <strong>Netcat</strong> sur ma machine Kali pour ouvrir un port d'écoute. J'ai injecté un script invisible sur le site pour que, dès qu'une personne visite la page, son navigateur m'envoie automatiquement ses informations de connexion. J'ai pu réceptionner ces données en temps réel sur mon terminal, prouvant ainsi la possibilité d'usurper une identité instantanément.</p>

        <div class="img_projet">
           <img src="../images/ecoute_cookie_cyber.png" alt="Terminal Netcat recevant le cookie volé">
           <em>Capture : Réception en direct du cookie de la victime sur mon port d'écoute.</em>
        </div>
    </div>

    <div class='liens_code'>
        <p><strong>Environnement technique :</strong> Kali Linux, VirtualBox, Metasploitable 2</p>
        <p><strong>Outils maîtrisés :</strong> Netcat, Burp Suite (initiation), Injections SQL & XSS</p>
    </div>

    <div>
        <h2>Résultats et Bilan</h2>
        <p>Ce projet m'a appris la règle d'or : <strong>ne jamais faire confiance à ce que l'utilisateur écrit</strong>. J'ai compris l'importance de "nettoyer" le code PHP pour bloquer les caractères spéciaux. Aujourd'hui, je sais non seulement identifier ces vulnérabilités, mais surtout expliquer aux développeurs comment les corriger en utilisant des requêtes préparées et des flags de sécurité.</p>
    </div>

    <script src="../script/script.js"></script>
  </body>
</html>