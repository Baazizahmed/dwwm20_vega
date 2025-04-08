<?php

use App\Kernel;
use Symfony\Component\HttpFoundation\Request;

/**
 * ********************************************************************************
 *                                Bienvenue sur Vega
 * ********************************************************************************
 *
 * index.php, le contrôleur frontal.
 * https://en.wikipedia.org/wiki/Front_controller
 *
 *
 * @todo Ses rôles:
 *      1. Amorcer l'application
 *      2. Instancier le noyau
 *      3. Récupérer la requête du client
 *      4. Soumettre cette requête au noyau pour traitement
 *              Récupérer la réponse correspondante
 *      5. Envoyer cette réponse au client pour affichage
 *      6. Terminer la requête
 * ********************************************************************************
 */

//  1. Amorçage de l'application
$context = require dirname(__DIR__) . "/config/bootstrap.php";

// 2. Instancier le noyau
$kernel = new Kernel($context['APP_ENV'], $context['APP_DEBUG']);

// 3. Récupérer la requête du client
$request = Request::createFromGlobals();

// 4. Soumettre cette requête au noyau pour traitement
// Récupérer la réponse correspondante
$response = $kernel->handle($request);

// 5. Envoyer cette réponse au client pour affichage
$response->send();

// 6. Terminer la requête
$kernel->terminate($request, $response);
