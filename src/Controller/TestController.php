<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController {

  /**
   *  @Route("/", name="index")
   */
  public function index(){
    var_dump("ça fonctionne");
    die();
  }

  /**
   *  @Route("/test/{age<\d+>?0}", name="test" , methods={"GET","POST"},schemes={"http","https"})
   */

  public function test(Request $request, $age){

    // $age = $request->attributes->get('age',0); MAgie de symfony, si je le met en parametre de la fonction avec Request, ca fonctionne

    return new Response("Vous avez $age ans");
  }

  
}