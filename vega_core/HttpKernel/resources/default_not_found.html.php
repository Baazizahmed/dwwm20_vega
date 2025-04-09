<!DOCTYPE html>
<html dir="ltr" lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="noindex,nofollow,noarchive,nosnippet,noodp,notranslate,noimageindex">
        <title>Vega</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400&family=Pacifico&display=swap" rel="stylesheet">

        <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 100 100'>
        <path d='M10,10 L50,90 L90,10 Z' fill='rgba(1, 1, 97, 0.587)' /></svg>">
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>
            .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            }

            h1, p, .button {
            opacity: 0;
            transform: translateY(20px);
            animation-name: fadeIn;
            animation-duration: 1s;
            animation-fill-mode: forwards;
            }

            @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
            }

            .animated {
            animation-delay: 0.5s;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1 class="animated">Erreur 404</h1>
            <p class="animated">Désolé, la page que vous recherchez est introuvable.</p>
            <a href="/" class="button animated">Retour à l'accueil</a>
        </div>
    </body>
</html>