<!doctype html>
<html lang="fr">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sensibilisation Cybersécurité</title>
    <link rel="icon" type="image/svg+xml" href="../images/favicon-dev.svg" />
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="../projets.css/mot_de_passe.css" />
  </head>
  <body>
    <?php include '../menu.php'; ?>

    <div class='titre_projet'>
        <h1>Sensibilisation Cybersécurité</h1>
    </div>

    <div>
        <h2>Le Contexte : Booster Portfolio</h2>
        <p>Ce projet a été réalisé dans le cadre de mon <strong>Booster Portfolio</strong> à l'école. L'idée était de simuler une mission de sensibilisation pour une entreprise. Si je devais viser un employeur, ce projet s'adresserait à des boîtes comme <strong>Jade Cybersécurité</strong> ou des créateurs qui vulgarisent la tech, à l'image de la chaîne YouTube de <strong>Micode</strong>. Mon public cible ? Les personnes "non-tech" qui n'ont aucune notion informatique et qui veulent juste protéger leur vie numérique.</p>
    </div>

    <div class="video-container">
        <iframe src="https://www.youtube.com/embed/gPKyAXl0hB4" title="Sensibilisation mots de passe" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div>
        <h2>Le problème de poids : Pourquoi l'iframe ?</h2>
        <p>Ma vidéo dure 1min20. Au début, je voulais la mettre directement sur le site, mais le fichier était trop lourd et faisait ramer la page. J'ai donc choisi de l'héberger sur YouTube en "non répertorié" pour l'intégrer via une <strong>iframe</strong>. C'est une solution qui permet de garder un portfolio ultra rapide tout en proposant du contenu HD.</p>
    </div>

    <div>
        <h2>L'outil : Un analyseur relié à Have I Been Pwned</h2>
        <p>Comme je n'avais pas encore beaucoup de connaissances en cyber, j'ai voulu créer un outil pédagogique. J'ai conçu un analyseur de mot de passe en m'aidant de l'IA pour la logique, et je l'ai relié à l'API de <strong>Have I Been Pwned</strong>. Ce site regroupe tous les mots de passe compromis dans le monde. Ça permet à l'utilisateur de voir concrètement si son code a déjà été piraté.</p>
    </div>

    <div class='img_projet'>
        <img src="../images/retroscoipie.png" alt="Capture d'écran After Effects montrant les points de rotoscopie">
    </div>

    <div>
        <h2>La galère technique : 6h de rotoscopie</h2>
        <p>Pour rendre la vidéo dynamique, j'ai utilisé la <strong>rotoscopie</strong> sur After Effects pour glisser des graphiques derrière moi. Ma grosse erreur : je me suis filmé avec un pull noir sur un fond noir... Le logiciel était perdu ! J'ai dû tout détourer à la main, image par image. Ça m'a pris <strong>6 heures de travail</strong> acharné. J'ai appris à mes dépens qu'un fond vert (ou au moins contrasté) est indispensable pour gagner du temps au montage.</p>
    </div>

    <div>
        <h2>Montage et Voix Off</h2>
        <p>J'ai finalisé le montage sur <strong>Premiere Pro</strong>. Pour que l'explication soit la plus claire possible pour un débutant, j'ai utilisé l'IA <strong>ElevenLabs</strong> pour générer une voix off propre. J'ai ensuite synchronisé chaque animation pour que le tutoriel reste fluide et facile à comprendre du début à la fin.</p>
    </div>

    <div class='img_projet'>
        <img src="../images/premiere_pro.png" alt="Capture d'écran Premiere Pro Timeline">
    </div>

    <div>
        <h2>Bilan : Apprendre de ses erreurs</h2>
        <p>Ce projet m'a appris à gérer des contraintes réelles : le poids des fichiers, les erreurs de tournage et la vulgarisation technique. C'est ce mélange de compétences (savoir coder un outil, monter une vidéo et expliquer simplement un sujet complexe) que je veux mettre en avant aujourd'hui.</p>
    </div>

    <script src="../script/script.js"></script>
</body>
</html>