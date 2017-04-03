<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\BrowserKit\Request;

class AppliController extends Controller
{
    /**
     * @Route("/")
     */
    public function accueilAction()
    {
        if( $this->container->get( 'security.authorization_checker' )->isGranted( 'IS_AUTHENTICATED_FULLY' ) )
        { $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $username = $user->getUsername();
        }
        return $this->render('accueil.html.twig',array('username' => $username ));
    }

}
