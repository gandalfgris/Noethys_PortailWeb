<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aides
 *
 * @ORM\Table(name="aides", indexes={@ORM\Index(name="IDfamille", columns={"IDfamille"}), @ORM\Index(name="IDactivite", columns={"IDactivite"}), @ORM\Index(name="IDcaisse", columns={"IDcaisse"}), @ORM\Index(name="IDfamille_2", columns={"IDfamille"}), @ORM\Index(name="IDactivite_2", columns={"IDactivite"}), @ORM\Index(name="IDcaisse_2", columns={"IDcaisse"})})
 * @ORM\Entity
 */
class Aides
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDaide", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idaide;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=200, nullable=true)
     */
    private $nom;

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
     * @ORM\Column(name="montant_max", type="float", precision=10, scale=0, nullable=true)
     */
    private $montantMax;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_dates_max", type="integer", nullable=true)
     */
    private $nbreDatesMax;

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
     * @var \Activites
     *
     * @ORM\ManyToOne(targetEntity="Activites")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDactivite", referencedColumnName="IDactivite")
     * })
     */
    private $idactivite;

    /**
     * @var \Caisses
     *
     * @ORM\ManyToOne(targetEntity="Caisses")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDcaisse", referencedColumnName="IDcaisse")
     * })
     */
    private $idcaisse;



    /**
     * Get idaide
     *
     * @return integer
     */
    public function getIdaide()
    {
        return $this->idaide;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Aides
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
     * Set dateDebut
     *
     * @param string $dateDebut
     *
     * @return Aides
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
     * @return Aides
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
     * Set montantMax
     *
     * @param float $montantMax
     *
     * @return Aides
     */
    public function setMontantMax($montantMax)
    {
        $this->montantMax = $montantMax;

        return $this;
    }

    /**
     * Get montantMax
     *
     * @return float
     */
    public function getMontantMax()
    {
        return $this->montantMax;
    }

    /**
     * Set nbreDatesMax
     *
     * @param integer $nbreDatesMax
     *
     * @return Aides
     */
    public function setNbreDatesMax($nbreDatesMax)
    {
        $this->nbreDatesMax = $nbreDatesMax;

        return $this;
    }

    /**
     * Get nbreDatesMax
     *
     * @return integer
     */
    public function getNbreDatesMax()
    {
        return $this->nbreDatesMax;
    }

    /**
     * Set idfamille
     *
     * @param \ConnecthysBundle\Entity\Familles $idfamille
     *
     * @return Aides
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
     * Set idactivite
     *
     * @param \ConnecthysBundle\Entity\Activites $idactivite
     *
     * @return Aides
     */
    public function setIdactivite(\ConnecthysBundle\Entity\Activites $idactivite = null)
    {
        $this->idactivite = $idactivite;

        return $this;
    }

    /**
     * Get idactivite
     *
     * @return \ConnecthysBundle\Entity\Activites
     */
    public function getIdactivite()
    {
        return $this->idactivite;
    }

    /**
     * Set idcaisse
     *
     * @param \ConnecthysBundle\Entity\Caisses $idcaisse
     *
     * @return Aides
     */
    public function setIdcaisse(\ConnecthysBundle\Entity\Caisses $idcaisse = null)
    {
        $this->idcaisse = $idcaisse;

        return $this;
    }

    /**
     * Get idcaisse
     *
     * @return \ConnecthysBundle\Entity\Caisses
     */
    public function getIdcaisse()
    {
        return $this->idcaisse;
    }
}
