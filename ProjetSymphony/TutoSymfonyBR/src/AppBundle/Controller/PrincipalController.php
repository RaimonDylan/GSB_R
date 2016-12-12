<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PrincipalController extends Controller
{
    /**
     * @Route("/hello/{message}")
     */
    public function helloAction($message)
    {
        return $this->render('AppBundle:Principal:hello.html.twig', array(
            "message"=>$message
        ));
    }

}
