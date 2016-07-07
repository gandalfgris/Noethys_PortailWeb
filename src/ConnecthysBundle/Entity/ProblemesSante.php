<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProblemesSante
 *
 * @ORM\Table(name="problemes_sante", indexes={@ORM\Index(name="IDindividu", columns={"IDindividu"}), @ORM\Index(name="IDtype", columns={"IDtype"})})
 * @ORM\Entity
 */
class ProblemesSante
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDprobleme", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprobleme;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDindividu", type="integer", nullable=true)
     */
    private $idindividu;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDtype", type="integer", nullable=true)
     */
    private $idtype;

    /**
     * @var string
     *
     * @ORM\Column(name="intitule", type="string", length=100, nullable=true)
     */
    private $intitule;

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
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="traitement_medical", type="integer", nullable=true)
     */
    private $traitementMedical;

    /**
     * @var string
     *
     * @ORM\Column(name="description_traitement", type="text", length=65535, nullable=true)
     */
    private $descriptionTraitement;

    /**
     * @var string
     *
     * @ORM\Column(name="date_debut_traitement", type="string", length=10, nullable=true)
     */
    private $dateDebutTraitement;

    /**
     * @var string
     *
     * @ORM\Column(name="date_fin_traitement", type="string", length=10, nullable=true)
     */
    private $dateFinTraitement;

    /**
     * @var integer
     *
     * @ORM\Column(name="eviction", type="integer", nullable=true)
     */
    private $eviction;

    /**
     * @var string
     *
     * @ORM\Column(name="date_debut_eviction", type="string", length=10, nullable=true)
     */
    private $dateDebutEviction;

    /**
     * @var string
     *
     * @ORM\Column(name="date_fin_eviction", type="string", length=10, nullable=true)
     */
    private $dateFinEviction;

    /**
     * @var integer
     *
     * @ORM\Column(name="diffusion_listing_enfants", type="integer", nullable=true)
     */
    private $diffusionListingEnfants;

    /**
     * @var integer
     *
     * @ORM\Column(name="diffusion_listing_conso", type="integer", nullable=true)
     */
    private $diffusionListingConso;

    /**
     * @var integer
     *
     * @ORM\Column(name="diffusion_listing_repas", type="integer", nullable=true)
     */
    private $diffusionListingRepas;



    /**
     * Get idprobleme
     *
     * @return integer
     */
    public function getIdprobleme()
    {
        return $this->idprobleme;
    }

    /**
     * Set idindividu
     *
     * @param integer $idindividu
     *
     * @return ProblemesSante
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
     * Set idtype
     *
     * @param integer $idtype
     *
     * @return ProblemesSante
     */
    public function setIdtype($idtype)
    {
        $this->idtype = $idtype;

        return $this;
    }

    /**
     * Get idtype
     *
     * @return integer
     */
    public function getIdtype()
    {
        return $this->idtype;
    }

    /**
     * Set intitule
     *
     * @param string $intitule
     *
     * @return ProblemesSante
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set dateDebut
     *
     * @param string $dateDebut
     *
     * @return ProblemesSante
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
     * @return ProblemesSante
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
     * Set description
     *
     * @param string $description
     *
     * @return ProblemesSante
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set traitementMedical
     *
     * @param integer $traitementMedical
     *
     * @return ProblemesSante
     */
    public function setTraitementMedical($traitementMedical)
    {
        $this->traitementMedical = $traitementMedical;

        return $this;
    }

    /**
     * Get traitementMedical
     *
     * @return integer
     */
    public function getTraitementMedical()
    {
        return $this->traitementMedical;
    }

    /**
     * Set descriptionTraitement
     *
     * @param string $descriptionTraitement
     *
     * @return ProblemesSante
     */
    public function setDescriptionTraitement($descriptionTraitement)
    {
        $this->descriptionTraitement = $descriptionTraitement;

        return $this;
    }

    /**
     * Get descriptionTraitement
     *
     * @return string
     */
    public function getDescriptionTraitement()
    {
        return $this->descriptionTraitement;
    }

    /**
     * Set dateDebutTraitement
     *
     * @param string $dateDebutTraitement
     *
     * @return ProblemesSante
     */
    public function setDateDebutTraitement($dateDebutTraitement)
    {
        $this->dateDebutTraitement = $dateDebutTraitement;

        return $this;
    }

    /**
     * Get dateDebutTraitement
     *
     * @return string
     */
    public function getDateDebutTraitement()
    {
        return $this->dateDebutTraitement;
    }

    /**
     * Set dateFinTraitement
     *
     * @param string $dateFinTraitement
     *
     * @return ProblemesSante
     */
    public function setDateFinTraitement($dateFinTraitement)
    {
        $this->dateFinTraitement = $dateFinTraitement;

        return $this;
    }

    /**
     * Get dateFinTraitement
     *
     * @return string
     */
    public function getDateFinTraitement()
    {
        return $this->dateFinTraitement;
    }

    /**
     * Set eviction
     *
     * @param integer $eviction
     *
     * @return ProblemesSante
     */
    public function setEviction($eviction)
    {
        $this->eviction = $eviction;

        return $this;
    }

    /**
     * Get eviction
     *
     * @return integer
     */
    public function getEviction()
    {
        return $this->eviction;
    }

    /**
     * Set dateDebutEviction
     *
     * @param string $dateDebutEviction
     *
     * @return ProblemesSante
     */
    public function setDateDebutEviction($dateDebutEviction)
    {
        $this->dateDebutEviction = $dateDebutEviction;

        return $this;
    }

    /**
     * Get dateDebutEviction
     *
     * @return string
     */
    public function getDateDebutEviction()
    {
        return $this->dateDebutEviction;
    }

    /**
     * Set dateFinEviction
     *
     * @param string $dateFinEviction
     *
     * @return ProblemesSante
     */
    public function setDateFinEviction($dateFinEviction)
    {
        $this->dateFinEviction = $dateFinEviction;

        return $this;
    }

    /**
     * Get dateFinEviction
     *
     * @return string
     */
    public function getDateFinEviction()
    {
        return $this->dateFinEviction;
    }

    /**
     * Set diffusionListingEnfants
     *
     * @param integer $diffusionListingEnfants
     *
     * @return ProblemesSante
     */
    public function setDiffusionListingEnfants($diffusionListingEnfants)
    {
        $this->diffusionListingEnfants = $diffusionListingEnfants;

        return $this;
    }

    /**
     * Get diffusionListingEnfants
     *
     * @return integer
     */
    public function getDiffusionListingEnfants()
    {
        return $this->diffusionListingEnfants;
    }

    /**
     * Set diffusionListingConso
     *
     * @param integer $diffusionListingConso
     *
     * @return ProblemesSante
     */
    public function setDiffusionListingConso($diffusionListingConso)
    {
        $this->diffusionListingConso = $diffusionListingConso;

        return $this;
    }

    /**
     * Get diffusionListingConso
     *
     * @return integer
     */
    public function getDiffusionListingConso()
    {
        return $this->diffusionListingConso;
    }

    /**
     * Set diffusionListingRepas
     *
     * @param integer $diffusionListingRepas
     *
     * @return ProblemesSante
     */
    public function setDiffusionListingRepas($diffusionListingRepas)
    {
        $this->diffusionListingRepas = $diffusionListingRepas;

        return $this;
    }

    /**
     * Get diffusionListingRepas
     *
     * @return integer
     */
    public function getDiffusionListingRepas()
    {
        return $this->diffusionListingRepas;
    }
}
