<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UnitesCotisations
 *
 * @ORM\Table(name="unites_cotisations", indexes={@ORM\Index(name="IDtype_cotisation", columns={"IDtype_cotisation"})})
 * @ORM\Entity
 */
class UnitesCotisations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDunite_cotisation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduniteCotisation;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDtype_cotisation", type="integer", nullable=true)
     */
    private $idtypeCotisation;

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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=200, nullable=true)
     */
    private $nom;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", precision=10, scale=0, nullable=true)
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="label_prestation", type="string", length=200, nullable=true)
     */
    private $labelPrestation;

    /**
     * @var integer
     *
     * @ORM\Column(name="defaut", type="integer", nullable=true)
     */
    private $defaut;



    /**
     * Get iduniteCotisation
     *
     * @return integer
     */
    public function getIduniteCotisation()
    {
        return $this->iduniteCotisation;
    }

    /**
     * Set idtypeCotisation
     *
     * @param integer $idtypeCotisation
     *
     * @return UnitesCotisations
     */
    public function setIdtypeCotisation($idtypeCotisation)
    {
        $this->idtypeCotisation = $idtypeCotisation;

        return $this;
    }

    /**
     * Get idtypeCotisation
     *
     * @return integer
     */
    public function getIdtypeCotisation()
    {
        return $this->idtypeCotisation;
    }

    /**
     * Set dateDebut
     *
     * @param string $dateDebut
     *
     * @return UnitesCotisations
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
     * @return UnitesCotisations
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
     * Set nom
     *
     * @param string $nom
     *
     * @return UnitesCotisations
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set montant
     *
     * @param float $montant
     *
     * @return UnitesCotisations
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set labelPrestation
     *
     * @param string $labelPrestation
     *
     * @return UnitesCotisations
     */
    public function setLabelPrestation($labelPrestation)
    {
        $this->labelPrestation = $labelPrestation;

        return $this;
    }

    /**
     * Get labelPrestation
     *
     * @return string
     */
    public function getLabelPrestation()
    {
        return $this->labelPrestation;
    }

    /**
     * Set defaut
     *
     * @param integer $defaut
     *
     * @return UnitesCotisations
     */
    public function setDefaut($defaut)
    {
        $this->defaut = $defaut;

        return $this;
    }

    /**
     * Get defaut
     *
     * @return integer
     */
    public function getDefaut()
    {
        return $this->defaut;
    }
}
