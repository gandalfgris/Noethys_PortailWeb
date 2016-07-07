<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComptesPayeurs
 *
 * @ORM\Table(name="comptes_payeurs", uniqueConstraints={@ORM\UniqueConstraint(name="IDfamille_2", columns={"IDfamille", "IDindividu"})}, indexes={@ORM\Index(name="IDfamille", columns={"IDfamille"}), @ORM\Index(name="IDindividu", columns={"IDindividu"})})
 * @ORM\Entity
 */
class ComptesPayeurs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDcompte_payeur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcomptePayeur;

    /**
     * @var \Familles
     *
     * @ORM\ManyToOne(targetEntity="Familles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDfamille", referencedColumnName="IDfamille")
     * })
     */
    private $idfamille;

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
     * Get idcomptePayeur
     *
     * @return integer
     */
    public function getIdcomptePayeur()
    {
        return $this->idcomptePayeur;
    }

    /**
     * Set idfamille
     *
     * @param \ConnecthysBundle\Entity\Familles $idfamille
     *
     * @return ComptesPayeurs
     */
    public function setIdfamille(\ConnecthysBundle\Entity\Familles $idfamille = null)
    {
        $this->idfamille = $idfamille;

        return $this;
    }

    /**
     * Get idfamille
     *
     * @return \ConnecthysBundle\Entity\Familles
     */
    public function getIdfamille()
    {
        return $this->idfamille;
    }

    /**
     * Set idindividu
     *
     * @param \ConnecthysBundle\Entity\Individus $idindividu
     *
     * @return ComptesPayeurs
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
