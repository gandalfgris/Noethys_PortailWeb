<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Attestations
 *
 * @ORM\Table(name="attestations", indexes={@ORM\Index(name="IDfamille", columns={"IDfamille"}), @ORM\Index(name="IDutilisateur", columns={"IDutilisateur"})})
 * @ORM\Entity
 */
class Attestations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDattestation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idattestation;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer", nullable=true)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="date_edition", type="string", length=10, nullable=true)
     */
    private $dateEdition;

    /**
     * @var string
     *
     * @ORM\Column(name="activites", type="text", length=65535, nullable=true)
     */
    private $activites;

    /**
     * @var string
     *
     * @ORM\Column(name="individus", type="text", length=65535, nullable=true)
     */
    private $individus;

    /**
     * @var string
     *
     * @ORM\Column(name="date_debut", type="string", length=10, nullable=true)
     */
    private $dateDebut;

    /**
     * @var string
     *
     * @ORM\Column(name="date_fin", type="string", length=10, nullable=true)
     */
    private $dateFin;

    /**
     * @var float
     *
     * @ORM\Column(name="total", type="float", precision=10, scale=0, nullable=true)
     */
    private $total;

    /**
     * @var float
     *
     * @ORM\Column(name="regle", type="float", precision=10, scale=0, nullable=true)
     */
    private $regle;

    /**
     * @var float
     *
     * @ORM\Column(name="solde", type="float", precision=10, scale=0, nullable=true)
     */
    private $solde;

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
     * @var \Utilisateurs
     *
     * @ORM\ManyToOne(targetEntity="Utilisateurs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDutilisateur", referencedColumnName="IDutilisateur")
     * })
     */
    private $idutilisateur;



    /**
     * Get idattestation
     *
     * @return integer
     */
    public function getIdattestation()
    {
        return $this->idattestation;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     *
     * @return Attestations
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set dateEdition
     *
     * @param string $dateEdition
     *
     * @return Attestations
     */
    public function setDateEdition($dateEdition)
    {
        $this->dateEdition = $dateEdition;

        return $this;
    }

    /**
     * Get dateEdition
     *
     * @return string
     */
    public function getDateEdition()
    {
        return $this->dateEdition;
    }

    /**
     * Set activites
     *
     * @param string $activites
     *
     * @return Attestations
     */
    public function setActivites($activites)
    {
        $this->activites = $activites;

        return $this;
    }

    /**
     * Get activites
     *
     * @return string
     */
    public function getActivites()
    {
        return $this->activites;
    }

    /**
     * Set individus
     *
     * @param string $individus
     *
     * @return Attestations
     */
    public function setIndividus($individus)
    {
        $this->individus = $individus;

        return $this;
    }

    /**
     * Get individus
     *
     * @return string
     */
    public function getIndividus()
    {
        return $this->individus;
    }

    /**
     * Set dateDebut
     *
     * @param string $dateDebut
     *
     * @return Attestations
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return string
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param string $dateFin
     *
     * @return Attestations
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return string
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set total
     *
     * @param float $total
     *
     * @return Attestations
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set regle
     *
     * @param float $regle
     *
     * @return Attestations
     */
    public function setRegle($regle)
    {
        $this->regle = $regle;

        return $this;
    }

    /**
     * Get regle
     *
     * @return float
     */
    public function getRegle()
    {
        return $this->regle;
    }

    /**
     * Set solde
     *
     * @param float $solde
     *
     * @return Attestations
     */
    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
    }

    /**
     * Get solde
     *
     * @return float
     */
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Set idfamille
     *
     * @param \ConnecthysBundle\Entity\Familles $idfamille
     *
     * @return Attestations
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
     * Set idutilisateur
     *
     * @param \ConnecthysBundle\Entity\Utilisateurs $idutilisateur
     *
     * @return Attestations
     */
    public function setIdutilisateur(\ConnecthysBundle\Entity\Utilisateurs $idutilisateur = null)
    {
        $this->idutilisateur = $idutilisateur;

        return $this;
    }

    /**
     * Get idutilisateur
     *
     * @return \ConnecthysBundle\Entity\Utilisateurs
     */
    public function getIdutilisateur()
    {
        return $this->idutilisateur;
    }
}
