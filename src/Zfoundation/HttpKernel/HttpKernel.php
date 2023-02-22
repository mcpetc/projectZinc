<?php
namespace App\Zfoundation\HttpKernel;

use Symfony\Component\HttpFoundation\Response;

abstract class HttpKernel implements HttpKernelInterface
{

        /**
     * Cette methode du noyau me pertmettre de soummettre 
     * la requete et de recuperer la reponse correspondente
     * 
     * 
     * @return Response
     */

     public function handleRequest() : Response
     {
       return new Response("Hello world!");
     }
}