<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Template()
     */
    public function indexAction()
    {

        return $this->redirectToRoute('login');
    }

    /**
     * Cette action n'est pas mappé sur une route,
     * car elle est appelée par une render() dans une vue Twig
     *
     * @Template("AppBundle::menu.html.twig")
     */
    public function menuAction()
    {


    }

    /**
     * @Route("/dashboard", name="dashboard")
     * @Template()
     */
    public function dashboardAction()
    {


    }

    /**
     * @Route("/invoicelist", name="invoicelist")
     * @Template()
     */
    public function invoicelistAction()
    {


    }

}
