<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
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
     * @Route("/activites", name="activites")
     * @Method("GET")
     * @Template()
     */
    public function activitesAction(Request $request)
    {
        $activites = $this
            ->getRepository()
            ->findByAuthor($author, $sort);

        return [
            'articles' => $articles,
            'author'   => $author,
        ];

    }

    /**
     * Get repositoryAct
     *
     * @return ArticleRepository
     */
    private function getRepositoryAct()
    {
        return $this
            ->getDoctrine()
            ->getRepository('AppBundle:Article');
    }

    /**
     * @Route("/reservations", name="reservations")
     * @Template()
     */
    public function reservationsAction()
    {


    }

    /**
     * @Route("/factures", name="factures")
     * @Template()
     */
    public function facturesAction()
    {


    }

    /**
     * @Route("/reglements", name="reglements")
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
