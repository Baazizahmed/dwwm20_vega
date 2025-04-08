<?php

use Symfony\Component\Dotenv\Dotenv;

/**
 * *****************************************************************
 *  Bootstrap
 * *****************************************************************
 *
 * Il s'agit de charger les fichiers de configuration
 *
 * @todo Ses rôles
 *      - Charger l'autochargeur des classes de composer
 *      - Charger les variables d'environnement
 *      - S'assurer que les variables d'environnment indispensables
 *          soient disponibles
 * *****************************************************************
 */

// Chargement l'autochargeur des classes de composer
require dirname(__DIR__) . "/vendor/autoload.php";

// Chargement des variables d'environnement
$envFile = dirname(__DIR__) . '/.env';

if (! file_exists($envFile)) {
    throw new RuntimeException(sprintf("The dotenv file does not exist. Please create this .env file in the root of vega."));
}

$dotenv = new Dotenv();
$dotenv->loadEnv($envFile);

if (! isset($_ENV['APP_ENV']) || empty($_ENV['APP_ENV']) || ! in_array($_ENV['APP_ENV'], ['dev', 'test', 'prod'])) {
    throw new UnexpectedValueException(sprintf("The APP_ENV variable is not valid."));
}

if (! isset($_ENV['APP_DEBUG']) || empty($_ENV['APP_DEBUG']) || ! in_array($_ENV['APP_DEBUG'], ['0', 'false', '1', 'true'])) {
    throw new UnexpectedValueException(sprintf("The APP_DEBUG variable is not valid."));
}

return $context = [
    "APP_ENV"   => $_ENV['APP_ENV'],
    "APP_DEBUG" => filter_var($_ENV['APP_DEBUG'], FILTER_VALIDATE_BOOL),
];
