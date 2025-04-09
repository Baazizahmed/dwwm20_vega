<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow,noarchive,nosnippet,noodp,notranslate,noimageindex">
    <title>Vega</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 100 100'><path d='M10,10 L50,90 L90,10 Z' fill='rgba(1, 1, 97, 0.587)' /></svg>">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            line-height: 1.6;
        }

        header {
            background-color: #4a90e2;
            color: white;
            padding: 2rem 0;
            text-align: center;
            animation: fadeInDown 1s ease;
        }

        @keyframes fadeInDown {
            0% {
                opacity: 0;
                transform: translateY(-50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h1 {
            font-family: 'Playfair Display', serif;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            margin: 0;
            font-size: 2.5rem;
        }

        .heading-line::after {
            content: "";
            width: 8rem;
            height: 0.2rem;
            display: block;
            margin: 0.5rem auto;
            background-color: rgba(255, 255, 255, 0.7);
            animation: fadeIn 1s ease;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        section {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 2rem auto;
            width: 90%;
            animation: slideInUp 1s ease;
        }

        @keyframes slideInUp {
            0% {
                opacity: 0;
                transform: translateY(50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        section div {
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 800px;
            padding: 2rem;
            margin: 1rem 0;
            border-radius: 15px;
            transition: transform 0.3s ease;
        }

        section div:hover {
            transform: translateY(-5px);
        }

        h2, h4 {
            font-family: 'Playfair Display', serif;
            margin-top: 0;
        }

        h2 {
            font-size: 1.75rem;
        }

        h4 {
            font-size: 1.25rem;
        }

        p, ul, ol {
            font-size: 1rem;
            margin: 0.5rem 0;
        }

        footer {
            background-color: #4a90e2;
            color: white;
            padding: 1rem 0;
            text-align: center;
            margin-top: 3rem;
            animation: fadeInUp 1s ease;
        }

        footer p {
            margin: 0;
            font-size: 1rem;
        }

        @media screen and (min-width: 768px) {
            section {
                width: 70%;
            }

            h1 {
                font-size: 3rem;
            }

            h2 {
                font-size: 2rem;
            }

            h4 {
                font-size: 1.5rem;
            }

            p, ul, ol {
                font-size: 1.1rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1 class="heading-line">Hello les dwwm</h1>
    </header>

    <section>
        <div>
            <h4>Je vous souhaite la bienvenue sur <strong>Vega</strong>.</h4>
        </div>
    </section>

    <section>
        <div>
            <h4>Si vous voyez cette page, c'est que vous n'avez pas encore créé votre propre page d'accueil.</h4>
            <h4>Pour se faire, veuillez <a target="_blank" href="https://github.com/jc-aziaha/dwwm_vega_framework_procedural.git">consulter la documentation</a>.</h4>
        </div>
    </section>

    <section>
        <div>
            <h2>A propos de Vega :</h2>
            <ul>
                <li>Ce framework se nomme Vega</li>
                <li>Il est conçu en PHP Orienté Objet</li>
                <li>Il implémente le patron de conception Modèle-Vue-Contrôleur</li>
                <li>Il n'est pas à but commercial mais à but éducatif</li>
                <li>Son rôle est donc de nous permettre de mieux comprendre comment fonctionne les frameworks commerciaux existants du marché</li>
            </ul>
        </div>
    </section>

    <section>
        <div>
            <h2>Les objectifs de Vega :</h2>
            <ul>
                <li>Recevoir la requête d'un client</li>
                <li>La traiter</li>
                <li>Lui retourner la réponse correspondante</li>
            </ul>
        </div>
    </section>
    
    <section>
        <div>
            <h2>Le cycle de vie de Vega :</h2>
            <ol>
                <li>
                    <strong>Requête du client :</strong>
                    <p>Le client, via son navigateur, envoie une requête au serveur web (par exemple, Apache ou Nginx).</p>
                </li>
                <li>
                    <strong>Réception de la requête :</strong>
                    <p>Le serveur web reçoit la requête et la transmet au fichier <code>index.php</code>, le point d'entrée de l'application, également appelé contrôleur frontal.</p>
                </li>
                <li>
                    <strong>Traitement par le contrôleur frontal :</strong>
                    <p>Le contrôleur frontal amorce l'application en chargeant les fichiers de configuration nécessaires :</p>
                    <ul>
                        <li>Charger le fichier de maintenance si l'application est en maintenance</li>
                        <li>Dans le cas contraire :
                            <ul>
                                <li>Charger l'autochargeur des classes de composer</li>
                                <li>Instancier le noyau (kernel) de l'application</li>
                                <li>Récupérer la requête du client</li>
                                <li>Soumettre au noyau, la requête du client pour traitement
                                    <ul>
                                        <li>Récupérer la réponse correspondante</li>
                                    </ul>
                                </li>
                                <li>Envoyer cette réponse au serveur
                                    <ul>
                                        <li>Afin que le serveur l'envoi au navigateur du client pour affichage </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <strong>Traitement par le noyau :</strong>
                    <p>Le noyau examine la requête et utilise le routeur pour déterminer le contrôleur approprié pour cette requête.</p>
                    <p>Le routeur a pour rôle d'acheminer les requêtes HTTP vers le bon contrôleur.</p>
                </li>
                <li>
                    <strong>Validation de la requête :</strong>
                    <p>Si le routeur trouve un contrôleur correspondant à la requête :</p>
                    <ul>
                        <li>Il retourne ce contrôleur au noyau.</li>
                    </ul>
                    <p>Sinon, il retourne une réponse nulle.</p>
                </li>
                <li>
                    <strong>Exécution du contrôleur :</strong>
                    <p>Si le noyau reçoit un contrôleur valide :</p>
                    <ul>
                        <li>Il exécute ce contrôleur pour obtenir la réponse correspondant à la requête (généralement au format HTML).</li>
                    </ul>
                    <p>Si aucun contrôleur valide n'est trouvé :</p>
                    <ul>
                        <li>Le noyau exécute le contrôleur des erreurs pour générer une page d'erreur appropriée.</li>
                    </ul>
                </li>
                <li>
                    <strong>Retour de la réponse :</strong>
                    <p>Le noyau renvoie la réponse obtenue au contrôleur frontal.</p>
                    <p>Le contrôleur frontal transmet cette réponse au serveur web.</p>
                </li>
                <li>
                    <strong>Affichage par le navigateur :</strong>
                    <p>Le serveur web envoie la réponse au navigateur du client.</p>
                    <p>Le navigateur affiche la page web générée, offrant ainsi le rendu final au client.</p>
                </li>
            </ol>
        </div>
    </section>


    <footer>
        <p>Vega <span id="year"></span></p>
    </footer>
    
    <script>
        const d = new Date();
        let year = d.getFullYear();
        document.getElementById("year").innerHTML = year;
    </script>
</body>
</html>
