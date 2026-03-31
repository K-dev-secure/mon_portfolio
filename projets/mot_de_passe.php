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
        <h2>Contexte et enjeux</h2>
        <p>Ce projet a été réalisé dans le cadre de mon <strong>Booster Portfolio</strong>. L'idée était de simuler une mission de sensibilisation pour une entreprise. Mon public cible ? Les personnes "non-tech" qui n'ont aucune notion informatique. Si je devais viser un employeur avec ce travail, ce serait des structures comme <strong>Jade Cybersécurité</strong> ou des médias de vulgarisation comme la chaîne de <strong>Micode</strong>.</p>
    </div>

    <div>
        <h2>Objectifs du projet</h2>
        <p>Le but était de créer un contenu pédagogique capable de transformer un sujet complexe en conseils simples. Je voulais que n'importe qui, après avoir vu la vidéo, puisse vérifier la solidité de ses comptes et comprendre pourquoi ses anciens mots de passe étaient dangereux.</p>
    </div>

    <div class="video-container">
        <iframe src="https://www.youtube.com/embed/8ZQ1_s5lQXQ" title="Sensibilisation mots de passe" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div>
        <h2>Action 1 : Résoudre le problème de poids (Iframe)</h2>
        <p>Ma vidéo dure 1min20. Au début, je voulais l'intégrer directement, mais le fichier était trop lourd et faisait ramer le site. Pour que l'expérience utilisateur reste fluide, j'ai choisi de l'héberger sur YouTube en "non répertorié" et de l'intégrer via une <strong>iframe</strong>. C'est une solution technique qui permet de garder un portfolio rapide tout en diffusant de la HD.</p>
    </div>

    <div>
        <h2>Action 2 : Création de l'analyseur avec l'IA</h2>
        <p>Comme je n'avais pas encore beaucoup de connaissances en cyber, j'ai conçu un analyseur de mot de passe. Je me suis aidé de l'IA pour la logique du code et je l'ai relié à l'API de <strong>Have I Been Pwned</strong>. Ce site regroupe tous les mots de passe piratés dans le monde : l'utilisateur peut donc tester en direct si son code est déjà connu des hackers.</p>
    </div>

    <div class='img_projet'>
        <img src="../images/retroscoipie.png" alt="Capture d'écran After Effects montrant les points de rotoscopie">
    </div>

    <div>
        <h2>Action 3 : La galère de la rotoscopie (6h de travail)</h2>
        <p>Pour rendre le tuto dynamique, j'ai utilisé la <strong>rotoscopie</strong> sur After Effects. Ma grosse erreur : je me suis filmé avec un pull noir sur un fond noir... Le logiciel ne me distinguait plus du décor ! J'ai dû tout détourer à la main, image par image. Ça m'a pris <strong>6 heures de travail</strong> acharné. J'ai appris par l'erreur qu'un fond vert (ou un fort contraste) est indispensable pour gagner du temps.</p>
    </div>

    <div>
        <h2>Action 4 : Montage et Voix Off professionnelle</h2>
        <p>J'ai finalisé le montage sur <strong>Premiere Pro</strong>. Pour que l'explication soit claire et pro, j'ai utilisé l'IA <strong>ElevenLabs</strong> pour générer une voix off. J'ai ensuite synchronisé chaque texte à l'écran sur le rythme de la voix pour que même un débutant puisse suivre sans décrocher.</p>
    </div>

    <div class='img_projet'>
        <img src="../images/premiere_pro.png" alt="Capture d'écran Premiere Pro Timeline">
    </div>

    <div>
        <h2>Résultats et Bilan</h2>
        <p>Ce projet m'a appris à gérer des contraintes réelles de production. Aujourd'hui, j'ai un livrable concret : une vidéo de sensibilisation fluide et un outil d'analyse fonctionnel. J'ai prouvé ma capacité à apprendre un sujet technique (la cyber), à utiliser l'IA pour coder et à transformer des erreurs de tournage en expérience concrète.</p>
    </div>

    <script src="../script/script.js"></script>
</body>
</html>