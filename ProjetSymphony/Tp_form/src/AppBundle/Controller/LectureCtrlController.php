<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Employe;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class LectureCtrlController extends Controller
{
    /**
     * @Route(
     *     path="/index",
     *     name="lectureCtrl_index",
     *     )
     */
    public function indexAction()
    {
        $employe = new Employe(1,"Raimon","Dylan",new \DateTime('1997-05-14'));
        $formulaire = $this->createFormBuilder($employe)
            ->add('num',NumberType::class)
            ->add('nom', TextType::class, array('label' => 'Saisir votre nom :'))
            ->add('prenom', TextType::class, array('label' => 'Saisir votre prénom :'))
            ->add('dateNaissance',DateType::class,  array('label' => 'Saisir votre date de naissance :'))
            ->add('Enregistrer',SubmitType::class,  array('label' => 'Enregistrer :'))
            ->getForm();
        return $this->render('AppBundle:LectureCtrl:view.html.twig', array(
            'leFormulaire' => $formulaire->createView()
        ));
    }
    /**
     * @Route(
     *     path="/afficheEmpParam",
     *     name="lectureCtrl_afficheEmpParam",
     *     )
     */
    public function afficheEmpParamAction()
    {
        $employe = new Employe(1,"Raimon","Dylan",new \DateTime('1997-05-14'));
        $formulaire = $this->createFormBuilder($employe)
            ->add('num',NumberType::class)
            ->add('nom', TextType::class, array('label' => 'Saisir votre nom :'))
            ->add('prenom', TextType::class, array('label' => 'Saisir votre prénom :'))
            ->add('dateNaissance',DateType::class,  array('label' => 'Saisir votre date de naissance :'))
            ->add('Enregistrer',SubmitType::class,  array('label' => 'Enregistrer :'))
            ->getForm();
        $sport = 'VolleyBall';
        $autos = array('Lama','Renault','Peugeot','Citroen');
        return $this->render('AppBundle:LectureCtrl:afficheEmpParam.html.twig', array(
            'leFormulaire' => $formulaire->createView(), 'sport' => $sport ,'autos' => $autos
        ));
    }

}
