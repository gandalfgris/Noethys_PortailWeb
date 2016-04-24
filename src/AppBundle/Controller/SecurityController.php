<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;


class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     * @Template()
     */
    public function loginAction()
    {
        return $this->render('AppBundle:Security:login.html.twig', array(
            // ...
        ));
    }


    /**
     * @Route("/register", name="register")
     * @Template()
     */
    public function registerAction()
    {
        return $this->render('AppBundle:Security:register.html.twig', array(
            // ...
        ));
    }

}
