<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abonnements
 *
 * @ORM\Table(name="abonnements", indexes={@ORM\Index(name="IDliste", columns={"IDliste"}), @ORM\Index(name="IDindividu", columns={"IDindividu"})})
 * @ORM\Entity
 */
class Abonnements
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDabonnement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idabonnement;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDliste", type="integer", nullable=true)
     */
    private $idliste;

    /**
     * @var \Individus
     *
     * @ORM\ManyToOne(targetEntity="Individus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDindividu", referencedColumnName="IDindividu")
     * })
     */
    private $idindividu;



    /**
     * Get idabonnement
     *
     * @return integer
     */
    public function getIdabonnement()
    {
        return $this->idabonnement;
    }

    /**
     * Set idliste
     *
     * @param integer $idliste
     *
     * @return Abonnements
     */
    public function setIdliste($idliste)
    {
        $this->idliste = $idliste;

        return $this;
    }

    /**
     * Get idliste
     *
     * @return integer
     */
    public function getIdliste()
    {
        return $this->idliste;
    }

    /**
     * Set idindividu
     *
     * @param \ConnecthysBundle\Entity\Individus $idindividu
     *
     * @return Abonnements
     */
    public function setIdindividu(\ConnecthysBundle\Entity\Individus $idindividu = null)
    {
        $this->idindividu = $idindividu;

        return $this;
    }

    /**
     * Get idindividu
     *
     * @return \ConnecthysBundle\Entity\Individus
     */
    public function getIdindividu()
    {
        return $this->idindividu;
    }
}
