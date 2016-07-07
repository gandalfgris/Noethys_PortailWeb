<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rattachements
 *
 * @ORM\Table(name="rattachements", indexes={@ORM\Index(name="IDindividu", columns={"IDindividu"}), @ORM\Index(name="IDfamille", columns={"IDfamille"}), @ORM\Index(name="IDcategorie", columns={"IDcategorie"})})
 * @ORM\Entity
 */
class Rattachements
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDrattachement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrattachement;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcategorie", type="integer", nullable=true)
     */
    private $idcategorie;

    /**
     * @var integer
     *
     * @ORM\Column(name="titulaire", type="integer", nullable=true)
     */
    private $titulaire;

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
     * @var \Familles
     *
     * @ORM\ManyToOne(targetEntity="Familles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDfamille", referencedColumnName="IDfamille")
     * })
     */
    private $idfamille;



    /**
     * Get idrattachement
     *
     * @return integer
     */
    public function getIdrattachement()
    {
        return $this->idrattachement;
    }

    /**
     * Set idcategorie
     *
     * @param integer $idcategorie
     *
     * @return Rattachements
     */
    public function setIdcategorie($idcategorie)
    {
        $this->idcategorie = $idcategorie;

        return $this;
    }

    /**
     * Get idcategorie
     *
     * @return integer
     */
    public function getIdcategorie()
    {
        return $this->idcategorie;
    }

    /**
     * Set titulaire
     *
     * @param integer $titulaire
     *
     * @return Rattachements
     */
    public function setTitulaire($titulaire)
    {
        $this->titulaire = $titulaire;

        return $this;
    }

    /**
     * Get titulaire
     *
     * @return integer
     */
    public function getTitulaire()
    {
        return $this->titulaire;
    }

    /**
     * Set idindividu
     *
     * @param \ConnecthysBundle\Entity\Individus $idindividu
     *
     * @return Rattachements
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

    /**
     * Set idfamille
     *
     * @param \ConnecthysBundle\Entity\Familles $idfamille
     *
     * @return Rattachements
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
}
