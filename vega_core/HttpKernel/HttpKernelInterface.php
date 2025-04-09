<?php 
namespace VegaCore\HttpKernel;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


    interface HttpKernelInterface
    {
            /**
         * Soumettre la requête de la part contrôleur frontal pour traitement
         * et lui retourne la réponse correspondante
         *
         * @param Request $request
         * @return Response
         */
        public function handle(Request $request): Response;
    }