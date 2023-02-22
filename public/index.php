<?php

use App\Kernel;

    /**
     * --------------------------------------------------------------
     * Bienvenue dans notre framework
     * 
     * Ce fichier représente le contrôleur frontal.
     * 
     * Ses rôles : 
     *      - Ammorcer l'application
     *      - Créer une nouvelle instance du noyau
     *      - Demander au noyau de soumettre a requête 
     *        et de récupérer la réponse correspondante
     *      - Envoyer cette réponse au client 
     *       
     * --------------------------------------------------------------
     */

     require __DIR__ . "/../config/bootstrap.php";

     
     //creation d une nouvelle istance du noyau de l application

     $kernel = new Kernel();

     // Demander au noyau de soummettre la requete et de recouperer la reponse correspondante
    $response = $kernel->handleRequest();
     //envoyer la reponse au client
     $response->send();