<?php // -*- coding: utf-8 -*-

namespace Fiedsch\C4TemplateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;


/**
 * Handles the Coder frontend routes.
 *
 * @Route(defaults={"_scope" = "frontend", "_token_check" = true})
 */
class TemplateController extends Controller
{
  /**
      * Renders some example content.
      *
      * @return Response
      *
      * @Route("/template/demo/{some}/{foo}", name="routing_demo")
      */
     public function demoAction($some, $foo)
     {

       return new Response("i was called with ${some} / ${foo}");

       // Typischer Ablauf:
       //
       // Verzeichnis und Klasse sind noch anzulegen: src/Resources/contao/controllers/SomeController.php
       // + Check auf Best-Practice!
       //
       // analog zu vendor/contao/core-bundle/src/Resources/contao/controllers/FrontendIndex.php ?
       //
       //  ... class SomeController extends \Frontend { ... }
       // $controller = new Fiedsch\TemplateBundle\Controller\SomeController();
       // return $controller->run();

     }

}
