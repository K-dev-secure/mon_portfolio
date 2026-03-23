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
    <link rel="stylesheet" href="../projets.css/v2portfolio.css" />

  <body>
    <?php include '../menu.php'; ?>
    
    <div class='titre_projet'>
        <h1>Infrastructure d'Entreprise</h1>
    </div>

    <p>Après avoir appris à créer des sites et à les sécuriser, une question me trottait dans la tête : <strong>comment les données circulent-elles réellement entre les machines ?</strong> Pour y répondre, je me suis lancé un défi de 10 heures : concevoir de A à Z le réseau local (LAN) d'une entreprise fictive en utilisant <strong>Cisco Packet Tracer</strong>, l'outil de référence des ingénieurs réseau.</p>

    

    <div>
        <h2>Le Storytelling : De la poussière aux paquets de données</h2>
        <p>Imaginez une entreprise qui emménage dans de nouveaux bureaux. Rien n'est branché. Mon rôle a été de tout imaginer : l'architecture physique (les câbles, les prises) et l'architecture logique (l'intelligence du réseau). J'ai commencé par placer des <strong>ordinateurs</strong>, puis des <strong>switches</strong> (des multiprises intelligentes) pour les relier entre eux, et enfin un <strong>routeur</strong>, qui sert d'aiguilleur pour sortir du réseau local.</p>
        
        <p>C'est là que le vrai travail commence. Pour que le réseau soit "vivant", chaque machine doit avoir une identité. J'ai dû calculer et attribuer des <strong>adresses IP</strong> et des <strong>masques de sous-réseau</strong> pour que chaque service (Compta, RH, IT) puisse communiquer sans créer de bouchons de données.</p>
    </div>

    <div>
        <h2>L'intelligence du réseau : DNS et DHCP</h2>
        <p>Ma plus grande découverte a été la mise en place de serveurs dédiés. Sans eux, un réseau est "muet".</p>
        <ul>
            <li><strong>Le serveur DHCP :</strong> J'ai configuré ce service pour qu'il distribue automatiquement des adresses IP. C'est magique : vous branchez un PC, et il reçoit sa configuration tout seul, sans erreur humaine.</li>
            <li><strong>Le serveur DNS :</strong> C'est sans doute ce qui m'a le plus passionné. C'est l'annuaire du réseau. J'ai programmé le DNS pour que l'on puisse taper "www.monsite.local" au lieu d'une adresse chiffrée complexe.</li>
        </ul>
        
        <div class="img_projet">
            <p>[PHOTO CONSEILLÉE : Capture d'écran de la fenêtre "Services > DNS" sur Packet Tracer avec vos entrées enregistrées]</p>
        </div>
    </div>

    <div>
        <h2>Face aux problèmes : La galère des passerelles</h2>
        <p>Tout n'a pas été rose. À un moment, j'étais bloqué : certains ordinateurs ne se "pinguait" pas (ils ne se voyaient pas). J'ai passé un long moment à chercher, frustré, avant de comprendre mon erreur : la <strong>passerelle par défaut</strong> (Default Gateway).</p>
        <p>La passerelle, c'est comme la porte de sortie d'un appartement. Si vous ne donnez pas l'adresse de la porte de sortie au PC, il reste bloqué dans sa chambre ! Une fois que j'ai configuré l'adresse du routeur comme passerelle sur chaque machine, j'ai vu pour la première fois les petits paquets verts transiter d'un bout à l'autre du schéma. C'était une vraie victoire personnelle.</p>
        
        <div class="img_projet">
            <p>[PHOTO CONSEILLÉE : Le schéma réseau complet avec tous les voyants au vert et un test de PING réussi en bas à droite]</p>
        </div>
    </div>

    <div class='liens_code'>
        <h3>Récupérer mon travail</h3>
        <p>Pour les curieux ou les recruteurs, j'ai mis à disposition mon fichier de simulation complet (.pkt). Vous pouvez l'ouvrir dans Cisco Packet Tracer pour explorer ma configuration de routage, de DHCP et de DNS.</p>
        <br>
            <a href="../téléchargement/cisco.pkt" download="Architecture_Reseau_Willy.pkt">
                Télécharger le fichier Packet Tracer (.pkt)
           </a>
    </div>

    <div>
        <h2>Bilan : Pourquoi c'est important ?</h2>
        <p>Ce projet m'a appris la rigueur. Dans un réseau, si un seul chiffre est faux dans un masque ou une IP, plus rien ne marche. J'ai aussi appris le <strong>Modèle OSI</strong>, une méthode pour comprendre comment un message est découpé avant de voyager. Cette base me sera indispensable pour ma future spécialisation en <strong>Cybersécurité</strong> : pour protéger un réseau, il faut d'abord savoir comment il est construit !</p>
    </div>
  </body>
</html>
