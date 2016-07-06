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

        return $this->redirectToRoute('dashboard');
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
     * @Route("/facture", name="invoicelist")
     * @Template()
     */
    public function factureAction()
    {


    }

    /**
     * @Route("/reservations", name="invoicelist")
     * @Template()
     */
    public function reservationAction()
    {


    }

    /**
     * @Route("/reglements", name="invoicelist")
     * @Template()
     */
    public function reglementAction()
    {


    }
    /**
     * @Route("/pieces", name="invoicelist")
     * @Template()
     */
    public function piecesAction()
    {


    }
    /**
     * @Route("/historique", name="invoicelist")
     * @Template()
     */
    public function historiqueAction()
    {


    }

}
