<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class HelloController extends AbstractController {

  /**
   *  @Route("/hello/{name}", name="hello")
   */
  public function hello( $name = "World"){

    return $this->render('hello.html.twig', [
      'name' => $name 
    ]);
  }

  /**
   * @Route("/example" , name="example")
   */

  public function example(){
    return $this->render('example.html.twig', ['age' => 33]);
  }

}