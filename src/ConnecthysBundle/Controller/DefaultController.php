<?php

namespace ConnecthysBundle\Controller;

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
            ->getRepositoryAct()
            ->findAll();

        return [
            'articles' => $articles,
            'author'   => $author,
        ];

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
    public function reglementsAction()
    {


    }
    /**
     * @Route("/pieces", name="pieces")
     * @Template()
     */
    public function piecesAction()
    {


    }
    /**
     * @Route("/historiques", name="historiques")
     * @Template()
     */
    public function historiquesAction()
    {


    }

    /**
     * Get repositoryAct
     *
     * @return ActivitesRepository
     */
    private function getRepositoryAct()
    {
        return $this
            ->getDoctrine()
            ->getRepository('ConnecthysBundle:Activites');
    }

}
