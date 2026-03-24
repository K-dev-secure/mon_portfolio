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
    </head>
  <body>
    <?php include '../menu.php'; ?>
  <div class='titre_projet'>
        <h1>Site vitrine</h1>
    </div>

    <p>Pendant mon stage de fin de première année, j'ai travaillé pour <strong>MK ASSURANCE</strong>, un courtier en assurance. Ma mission était de prendre leur logo existant et de créer tout l'univers visuel qui va autour, puis de développer leur site internet : <a href="https://mkassurance.fr/" target="_blank">mkassurance.fr</a>.</p>

    <div>
        <h2>L'image de l'entreprise : La charte graphique</h2>
        <p>Le logo de l'entreprise existait déjà, mais il n'y avait pas de règles pour l'utiliser. J'ai donc créé une <strong>charte graphique</strong>. C'est un document qui fixe les couleurs officielles et les polices d'écriture pour que tous les documents de l'entreprise se ressemblent et fassent "pro". J'ai utilisé des outils de dessin pour que ces visuels restent bien nets sur tous les supports.</p>
        
        <div class='img_projet'>
            <img src="/images/charte_graphique.png" alt="Charte graphique de MK ASSURANCE">
        </div>
    </div>

    <div>
        <h2>La publicité : Création de flyers</h2>
        <p>Pour aider l'entreprise à trouver des clients, j'ai créé des <strong>flyers</strong> (des feuilles publicitaires). J'ai repris le logo et les couleurs de la charte que j'avais définie. J'ai fait attention à ce que les images soient jolies et que les textes soient faciles à lire. J'ai aussi préparé les fichiers pour l'imprimeur afin que les couleurs sortent parfaitement sur le papier.</p>

        <div class='img_projet_flyer'>
            <img src="/images/flyer_expatrié.png" alt="Flyer Recto">
            <img src="/images/flyer_particulier.png" alt="Flyer Verso">
        </div>
    </div>

    <div>
        <h2>Le site internet : Codé à la main</h2>
        <p>Pour le site web, j'ai écrit tout le code moi-même sans utiliser de logiciel automatique. J'ai utilisé <strong>HTML</strong> pour le contenu, <strong>CSS</strong> pour le design et <strong>PHP</strong> pour les fonctions comme le formulaire de contact. C'est ce qu'on appelle coder "sans framework", ce qui permet d'avoir un site très rapide et unique.</p>
    </div>

    <div class='liens_code'>
        <p><strong>Voir le site en direct :</strong> <a href="https://mkassurance.fr/" target="_blank">www.mkassurance.fr</a></p>
        <p><strong>Voir mon code sur GitHub :</strong> <a href="https://github.com/koffiwilly/maquette-MK-Assurance/tree/main" target="_blank">Lien vers mon code source</a></p>
    </div>

    <div>
        <h2>La mise en ligne : Docker et l'hébergement</h2>
        <p>Pour mettre le site sur Internet (l'<strong>hébergement</strong>), j'ai eu un coup de main pour utiliser <strong>Docker</strong>. 
        Pour expliquer simplement, Docker est comme une boîte virtuelle qui contient le site et tout ce dont il a besoin pour marcher. Cela permet d'être sûr que le site fonctionne exactement de la même façon sur mon ordinateur et sur le serveur de l'entreprise.</p>
    </div>

    <div>
        <h2>Ce que j'ai appris</h2>
        <p>Ce stage m'a appris à être polyvalent. J'ai dû m'occuper du côté "dessin" pour les flyers et du côté "technique" pour le code du site. J'ai appris à respecter une image de marque déjà existante et à la rendre plus moderne sur le web. C'est une expérience qui m'a beaucoup aidé à comprendre comment fonctionne un vrai projet en entreprise.</p>
    </div>
    <div>
        <h2>Bilan et Compétences Acquises</h2>
        <p>Ce stage a été une véritable immersion professionnelle. J'ai appris à gérer la relation client, à traduire des besoins métier en solutions techniques et à respecter des délais de livraison stricts. Ce projet prouve ma capacité à piloter une création digitale de bout en bout : depuis la conception artistique sur la suite Adobe jusqu'au déploiement technique complexe sur serveur. Travailler sur du code "pur" a consolidé ma logique de programmation, me rendant beaucoup plus autonome et confiant pour aborder des architectures plus complexes à l'avenir.</p>
    </div>
  </body>
</html>
