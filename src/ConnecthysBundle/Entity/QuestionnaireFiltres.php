<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestionnaireFiltres
 *
 * @ORM\Table(name="questionnaire_filtres", indexes={@ORM\Index(name="IDquestion", columns={"IDquestion"}), @ORM\Index(name="IDtarif", columns={"IDtarif"})})
 * @ORM\Entity
 */
class QuestionnaireFiltres
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDfiltre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfiltre;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDquestion", type="integer", nullable=true)
     */
    private $idquestion;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=100, nullable=true)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="choix", type="text", length=65535, nullable=true)
     */
    private $choix;

    /**
     * @var string
     *
     * @ORM\Column(name="criteres", type="text", length=65535, nullable=true)
     */
    private $criteres;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDtarif", type="integer", nullable=true)
     */
    private $idtarif;



    /**
     * Get idfiltre
     *
     * @return integer
     */
    public function getIdfiltre()
    {
        return $this->idfiltre;
    }

    /**
     * Set idquestion
     *
     * @param integer $idquestion
     *
     * @return QuestionnaireFiltres
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
     * Set categorie
     *
     * @param string $categorie
     *
     * @return QuestionnaireFiltres
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set choix
     *
     * @param string $choix
     *
     * @return QuestionnaireFiltres
     */
    public function setChoix($choix)
    {
        $this->choix = $choix;

        return $this;
    }

    /**
     * Get choix
     *
     * @return string
     */
    public function getChoix()
    {
        return $this->choix;
    }

    /**
     * Set criteres
     *
     * @param string $criteres
     *
     * @return QuestionnaireFiltres
     */
    public function setCriteres($criteres)
    {
        $this->criteres = $criteres;

        return $this;
    }

    /**
     * Get criteres
     *
     * @return string
     */
    public function getCriteres()
    {
        return $this->criteres;
    }

    /**
     * Set idtarif
     *
     * @param integer $idtarif
     *
     * @return QuestionnaireFiltres
     */
    public function setIdtarif($idtarif)
    {
        $this->idtarif = $idtarif;

        return $this;
    }

    /**
     * Get idtarif
     *
     * @return integer
     */
    public function getIdtarif()
    {
        return $this->idtarif;
    }
}
