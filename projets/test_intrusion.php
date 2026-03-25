<!doctype html>
<html lang="fr">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Test d'intrusion</title>
    <link rel="icon" type="image/svg+xml" href="../images/favicon-dev.svg" />
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="../projets.css/test_intrusion.css" />
  </head>
  <body>
    <?php include '../menu.php'; ?>

    <div class='titre_projet'>
        <h1>Pentest Web : Audit offensif sur l'application DVWA</h1>
    </div>

    <p>Ce travail a été réalisé dans le cadre d'un <strong>projet de cours en Cybersécurité</strong> 
    L'objectif était de mener un audit de vulnérabilités réel sur l'application <strong>DVWA</strong> (Damn Vulnerable Web Application) afin de comprendre les mécanismes d'attaque et d'apprendre à sécuriser un environnement web professionnel</p>

    <div>
        <h2>1. Mise en place du laboratoire sur VirtualBox</h2>
        <p><strong>Action :</strong> Pour mener cet audit sans danger, j'ai créé un réseau isolé sur <strong>VirtualBox</strong> avec deux machines : <strong>Kali Linux</strong> (mon outil d'attaquant) et <strong>Metasploitable 2</strong> (ma cible) 
        J'ai configuré un réseau "Hôte uniquement" pour qu'elles communiquent via une commande <strong>ping</strong> sans jamais toucher au vrai Internet</p>
        
        <p><strong>Analyse du risque :</strong> La validation de la communication est l'étape zéro 
        Une machine qui répond au ping confirme qu'elle est "vivante" sur le réseau et que sa surface d'attaque est prête à être scannée</p>

        <div class="img_projet">
           <img src="/images/ping_offensive.png" alt="Capture de ton terminal Kali montrant que la machine cible répond bien">
            <em>Capture de ton terminal Kali montrant que la machine cible (192.168.x.x) répond bien</em>
        </div>
        
    </div>

    <div>
        <h2>2. Injection SQL : Le détournement de la base de données</h2>
        <p><strong>Action :</strong> Sur le site <strong>DVWA</strong>, j'ai repéré un formulaire de recherche qui ne vérifiait pas les saisies 
        En injectant la commande logique <strong>1' OR '1'='1</strong>, j'ai réussi à tromper le serveur SQL</p>
        
        <p><strong>Analyse du risque :</strong> Cette commande force le serveur à valider une condition mathématique qui est <strong>toujours vraie</strong> 
        Au lieu de chercher un seul utilisateur, la base de données déverrouille l'intégralité de ses dossiers et m'affiche tous les comptes clients avec leurs noms et leurs codes secrets (hashs)</p>

        <div class="img_projet">
            <img src="/images/utilisateur_infiltrer.png" alt="Capture de l'interface DVWA montrant tous les utilisateurs qui s'affichent après l'injection">
            <em>Capture de l'interface DVWA montrant tous les utilisateurs qui s'affichent après l'injection</em>
        </div>
        
    </div>

    <div>
        <h2>3. Faille XSS (Reflected) : Le code invisible</h2>
        <p><strong>Action :</strong> J'ai testé la résistance du site aux scripts malveillants en injectant une ligne de code JavaScript : <strong>&lt;script&gt;alert(document.cookie)&lt;/script&gt;</strong> 
        Le site a immédiatement exécuté mon code et affiché une fenêtre pop-up avec mon jeton de session</p>
        
        <p><strong>Analyse du risque :</strong> Le <strong>XSS</strong> permet d'exécuter du code directement dans le navigateur de la victime 
        C'est une faille redoutable car elle permet de voler des informations sensibles comme les cookies qui servent à s'identifier sans mot de passe</p>

        <div class="img_projet">
            <img src="/images/faille_xss.png" alt="Capture du navigateur montrant l'alerte avec le PHPSESSID par-dessus le site DVWA">
            <em>Capture du navigateur montrant l'alerte avec le PHPSESSID par-dessus le site DVWA</em>
        </div>
        
    </div>

    <div>
        <h2>4. Vol de session : L'exfiltration par Netcat</h2>
        <p><strong>Action :</strong> Je suis passé à une attaque plus discrète en utilisant <strong>Netcat</strong> sur Kali Linux pour ouvrir un "port d'écoute" (<strong>nc -lvp 8888</strong>) 
        J'ai injecté un script d'image invisible dans la page de <strong>DVWA</strong> pour que le navigateur de la victime m'envoie automatiquement son cookie de session sur mon terminal</p>
        
        <p><strong>Analyse du risque :</strong> L'écoute réseau permet de réceptionner des données volées en temps réel 
        Une fois ce cookie récupéré, je peux <strong>usurper l'identité</strong> de la victime et accéder à son compte privé instantanément sans connaître son mot de passe</p>

        <div class="img_projet">
           <img src="/images/ecoute_cookie_cyber.png" alt="Capture du terminal Netcat montrant la requête GET contenant le cookie volé">
            <em>Capture du terminal Netcat montrant la requête GET contenant le cookie volé</em>
        </div>
        
    </div>

    <div class='liens_code'>
        <p><strong>Environnement :</strong> Kali Linux / VirtualBox / Metasploitable 2</p>
        <p><strong>Outils utilisés :</strong> DVWA, Netcat, Injection SQL, XSS</p>
    </div>

    <div>
        <h2>Sécuriser le code</h2>
        <p>La règle d'or apprise durant ce cours est de <strong>ne jamais faire confiance à l'utilisateur</strong>. Il faut "nettoyer" les entrées (sanitization) pour bloquer les caractères spéciaux et utiliser des flags de sécurité comme <strong>HttpOnly</strong> pour protéger les cookies.</p>
    </div>

    <div>
      <h2>Conclusion</h2>
      <p>Ce projet de cours m'a appris qu'une petite faille de programmation peut compromettre tout un système 
      En comprenant comment attaquer sur <strong>VirtualBox</strong>, j'ai acquis les réflexes nécessaires pour mieux conseiller les entreprises sur leur protection</p>
    </div>  </body>
</html>
