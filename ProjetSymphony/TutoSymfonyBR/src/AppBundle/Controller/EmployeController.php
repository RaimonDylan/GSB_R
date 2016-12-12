<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
/**
 * @Route(
 *     path="/gestemp",
 *     name="prefixe")
 * @Template("AppBundle:Employe:voir.html.twig")
 */
class EmployeController extends Controller
{
    /**
     * @Route(
     *     path="/employe/{id}",
     *     name="numero de lemploye",
     *     defaults={"id":99},
     *     requirements={"id":"\d+"}
     *
     *     )
     */
    public function voirAction($id)
    {
        return  array(
            "id"=>$id
        );
    }
    /**
     * @Route(
     *     path="/employev2/{id}",
     *     name="numero de lemployev2",
     *     requirements={"id":"\d+"}
     *     )
     */
    public function voirActionV2($id)
    {
        return array(
            "id"=>$id
        );
    }

    /**
     * @Route(
     *     path="/employe/{Bxx}",
     *     name="voir le nom de lemploye",
     *     requirements={"Bxx":"^[B][a-zA-Z].+"}
     *     )
     */
    public function voirNom($Bxx)
    {
        return $this->render('AppBundle:Employe:voirNom.html.twig', array(
            "Bxx"=>$Bxx
        ));
    }

}
