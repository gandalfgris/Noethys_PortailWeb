<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestionnaireReponses
 *
 * @ORM\Table(name="questionnaire_reponses")
 * @ORM\Entity
 */
class QuestionnaireReponses
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDreponse", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreponse;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDquestion", type="integer", nullable=true)
     */
    private $idquestion;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDindividu", type="integer", nullable=true)
     */
    private $idindividu;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDfamille", type="integer", nullable=true)
     */
    private $idfamille;

    /**
     * @var string
     *
     * @ORM\Column(name="reponse", type="text", length=65535, nullable=true)
     */
    private $reponse;


}

