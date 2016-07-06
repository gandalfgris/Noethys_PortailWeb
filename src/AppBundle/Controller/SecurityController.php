<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\LoginType;

class SecurityController extends Controller
{
    
    
    
    /**
     * @Route("/login", name="login")
     * @Template()
     */
    public function loginAction()
    {

        $authenticationUtils = $this->get('security.authentication_utils');
        
        $form = $this->createForm(LoginType::class, [
            'username' => $authenticationUtils->getLastUsername()
        ]);

        if ($error = $authenticationUtils->getLastAuthenticationError()) {
            $form->addError(new FormError(
                $error->getMessage(),
                $error->getMessageKey(),
                $error->getMessageData(),
                null,
                $error
            ));
        }

        return [
            'form' => $form->createView(),
            'error'=>$error
        ];



    }

    /**
     * @Route("/forgetpassword", name="forgetpassword")
     * @Template()
     */
    public function forgetpasswordAction()
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
