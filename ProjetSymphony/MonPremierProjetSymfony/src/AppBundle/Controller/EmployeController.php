<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class EmployeController extends Controller
{
    /**
     * @Route("/hello/{message}")
     */
    public function helloAction($message)
    {
        return $this->render('AppBundle:Employe:voir.html.twig', array(
            "message"=>$message
        ));
    }
    /**
     * @Route("/employe/{id}")
     */
    public function voirAction($id)
    {
        return $this->render('AppBundle:Employe:voir.html.twig', array(
            // ...
        ));
    }

}
