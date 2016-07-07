<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestionnaireReponses
 *
 * @ORM\Table(name="questionnaire_reponses", indexes={@ORM\Index(name="IDquestion", columns={"IDquestion"}), @ORM\Index(name="IDindividu", columns={"IDindividu"}), @ORM\Index(name="IDfamille", columns={"IDfamille"})})
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



    /**
     * Get idreponse
     *
     * @return integer
     */
    public function getIdreponse()
    {
        return $this->idreponse;
    }

    /**
     * Set idquestion
     *
     * @param integer $idquestion
     *
     * @return QuestionnaireReponses
     */
    public function setIdquestion($idquestion)
    {
        $this->idquestion = $idquestion;

        return $this;
    }

    /**
     * Get idquestion
     *
     * @return integer
     */
    public function getIdquestion()
    {
        return $this->idquestion;
    }

    /**
     * Set idindividu
     *
     * @param integer $idindividu
     *
     * @return QuestionnaireReponses
     */
    public function setIdindividu($idindividu)
    {
        $this->idindividu = $idindividu;

        return $this;
    }

    /**
     * Get idindividu
     *
     * @return integer
     */
    public function getIdindividu()
    {
        return $this->idindividu;
    }

    /**
     * Set idfamille
     *
     * @param integer $idfamille
     *
     * @return QuestionnaireReponses
     */
    public function setIdfamille($idfamille)
    {
        $this->idfamille = $idfamille;

        return $this;
    }

    /**
     * Get idfamille
     *
     * @return integer
     */
    public function getIdfamille()
    {
        return $this->idfamille;
    }

    /**
     * Set reponse
     *
     * @param string $reponse
     *
     * @return QuestionnaireReponses
     */
    public function setReponse($reponse)
    {
        $this->reponse = $reponse;

        return $this;
    }

    /**
     * Get reponse
     *
     * @return string
     */
    public function getReponse()
    {
        return $this->reponse;
    }
}
