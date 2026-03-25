<!doctype html>
<html lang="fr">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio - Écoute Réseau</title>
    <link rel="icon" type="image/svg+xml" href="../images/favicon-dev.svg" />
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="../projets.css/ecoute_reseau.css" />
  </head>
  <body>
    <?php include '../menu.php'; ?>
    
    <div class='titre_projet'>
        <h1>Écoute & Analyse Réseau avec Wireshark</h1>
    </div>

    <p>Ce projet consiste à capturer et analyser le trafic réseau d'un <strong>réseau local (LAN)</strong> à l'aide de <strong>Wireshark</strong>, 
    afin de comprendre les échanges entre les machines et identifier d'éventuels comportements suspects. 
    L'objectif est de renforcer mes compétences en analyse réseau, complémentaires à mon profil cybersécurité.</p>

    <div>
        <h2>1. Mise en place de l'environnement de capture</h2>
        <p>Pour ce projet, j'utilise <strong>VirtualBox</strong> avec une machine virtuelle sous <strong>Linux</strong> connectée à un réseau interne simulé. 
        <strong>Wireshark</strong> est installé sur la VM pour écouter et capturer toutes les trames qui transitent sur l'interface réseau.</p>
        <p>Cette étape comprend la configuration de l'interface réseau en mode <strong>promiscuous</strong> (mode écoute) 
        pour intercepter l'ensemble du trafic, pas seulement celui destiné à ma machine.</p>
    </div>

    <div>
        <h2>2. Capture de trames et filtrage par protocole</h2>
        <p>Une fois la capture lancée, j'applique des <strong>filtres Wireshark</strong> pour isoler les protocoles intéressants :</p>
        <ul>
            <li><strong>DNS</strong> — pour observer les résolutions de noms de domaine</li>
            <li><strong>HTTP</strong> — pour voir les requêtes et réponses web en clair</li>
            <li><strong>TCP</strong> — pour analyser les connexions et le handshake à trois voies</li>
            <li><strong>ARP</strong> — pour détecter les requêtes de résolution d'adresses MAC</li>
        </ul>
        <p>L'objectif est de comprendre comment chaque protocole se comporte sur le réseau et savoir lire une trame de bout en bout.</p>
    </div>

    <div>
        <h2>3. Identification de trafic suspect</h2>
        <p>En analysant les captures, je cherche des anomalies potentielles comme :</p>
        <ul>
            <li>Des requêtes <strong>DNS</strong> vers des domaines inhabituels</li>
            <li>Du trafic <strong>HTTP non chiffré</strong> contenant des données sensibles</li>
            <li>Des tentatives de <strong>scan de ports</strong> visibles dans les trames TCP</li>
            <li>Des <strong>ARP spoofing</strong> potentiels (doublons d'adresses MAC)</li>
        </ul>
    </div>

    <div>
        <h2>4. Rédaction d'un rapport d'analyse</h2>
        <p>À la fin de la capture, je rédige un rapport qui résume les observations : le volume de trafic capturé, 
        les protocoles identifiés, les anomalies détectées et les <strong>recommandations de sécurité</strong> associées 
        (chiffrement HTTPS, segmentation réseau, surveillance ARP, etc.).</p>
    </div>

    <div class='liens_code'>
        <h3>État d'avancement</h3>
        <p>Ce projet est actuellement <strong>en cours de réalisation</strong>. L'environnement VirtualBox est en place et les premières captures ont été lancées.</p>
        <p>Il me manque encore certaines compétences techniques pour aller plus loin, notamment sur <strong>l'analyse avancée des trames</strong>, 
        la <strong>détection d'anomalies réseau</strong> et la <strong>rédaction d'un rapport de sécurité complet</strong>. 
        Ces compétences sont en cours d'acquisition dans ma formation et je mettrai ce projet à jour au fur et à mesure de ma progression.</p>

    </div>

    <script src="../script/script.js"></script>
  </body>
</html>