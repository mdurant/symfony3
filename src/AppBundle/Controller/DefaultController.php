<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    // crear nueva accion - ejercicio HOLAMUNDO
    /**
     * @Route("/hello-world", name="hhelloWorld")
     */
    public function helloWorldAction (){
        echo "<h1> Hola MUNDO </h1>";
        die();   // evitar que pida vista
    }
}
