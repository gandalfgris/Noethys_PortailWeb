<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RenseignementsActivites
 *
 * @ORM\Table(name="renseignements_activites", indexes={@ORM\Index(name="IDactivite", columns={"IDactivite"}), @ORM\Index(name="IDtype_renseignement", columns={"IDtype_renseignement"})})
 * @ORM\Entity
 */
class RenseignementsActivites
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDrenseignement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrenseignement;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDactivite", type="integer", nullable=true)
     */
    private $idactivite;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDtype_renseignement", type="integer", nullable=true)
     */
    private $idtypeRenseignement;



    /**
     * Get idrenseignement
     *
     * @return integer
     */
    public function getIdrenseignement()
    {
        return $this->idrenseignement;
    }

    /**
     * Set idactivite
     *
     * @param integer $idactivite
     *
     * @return RenseignementsActivites
     */
    public function setIdactivite($idactivite)
    {
        $this->idactivite = $idactivite;

        return $this;
    }

    /**
     * Get idactivite
     *
     * @return integer
     */
    public function getIdactivite()
    {
        return $this->idactivite;
    }

    /**
     * Set idtypeRenseignement
     *
     * @param integer $idtypeRenseignement
     *
     * @return RenseignementsActivites
     */
    public function setIdtypeRenseignement($idtypeRenseignement)
    {
        $this->idtypeRenseignement = $idtypeRenseignement;

        return $this;
    }

    /**
     * Get idtypeRenseignement
     *
     * @return integer
     */
    public function getIdtypeRenseignement()
    {
        return $this->idtypeRenseignement;
    }
}
