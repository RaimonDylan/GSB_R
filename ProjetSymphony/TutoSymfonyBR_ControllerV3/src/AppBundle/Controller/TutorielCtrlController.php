<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class TutorielCtrlController extends Controller
{
    /**
     * @Route(
     *     path="/hello/{message}",
     *     name="Bonjour",
     *     requirements={"message":"[A-Za-z]+"}
     *     )
     */
    public function helloAction($message)
    {
        $page ="<!DOCTYPE html><html><body><h1> Bonjour à " . $message . " </h1></body></html>";
        return new Response($page);
    }
    /**
     * @Route(
     *     path="/ailleurs/{message}",
     *     name="redirection"
     *     )
     */
    public function ailleursAction($message)
    {
        $param=$message . " (après Redirection) !";
        $param = preg_replace("#[^a-zA-Z]#","",$param);
        return $this->redirectToRoute('Bonjour',array('message'=>$param));
    }
    /**
     * @Route(
     *     path="/transferer/{message}",
     *     name="transferer",
     *     requirements={"message":"[A-Za-z]+"}
     *     )
     */
    public function transfererAction($message)
    {
        $param=$message . " (Transféré à ". date("d/m/Y - H:i") . " ) ";
        return $this->forward('AppBundle:TutorielCtrl:hello',array('message'=>$param));
    }
    /**
     * @Route(
     *     path="/testfrm/{nom}",
     *     name="testfrm",
     *     requirements={"nom":"[A-Za-z]+"}
     *     )
     */
    public function testfrmAction($nom, Request $request)
    {
        $formulaire = $this->createFormBuilder()
            ->add('zsnom',TextType::class)
            ->add('zsprenom', TextType::class, array('label' => 'Saisir votre prénom :'))
    }

}
