<?php

use Whoops\Run;
use Dotenv\Dotenv;
use Whoops\Handler\PrettyPageHandler;
//*
// Voici le fichier de configuration permettant d amorcer l application

//chargement de l autoloader composer
require __DIR__ . "/../vendor/autoload.php";

//chargement de constants rappresentant de raccourci

require __DIR__ . "/constants/app.php";

$whoops = new Run;
$whoops->pushHandler(new PrettyPageHandler);
$whoops->register();

//chargement des variables d'envirrennnemet
$dotenv = Dotenv::createMutable(ROOT);
$dotenv->load();

// chargement du conteneur de dependences