<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activites
 *
 * @ORM\Table(name="activites")
 * @ORM\Entity(repositoryClass="ConnecthysBundle\Repository\ActivitesRepository")
 */
class Activites
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDactivite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idactivite;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=200, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="abrege", type="string", length=50, nullable=true)
     */
    private $abrege;

    /**
     * @var integer
     *
     * @ORM\Column(name="coords_org", type="integer", nullable=true)
     */
    private $coordsOrg;

    /**
     * @var string
     *
     * @ORM\Column(name="rue", type="string", length=200, nullable=true)
     */
    private $rue;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=10, nullable=true)
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=100, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=50, nullable=true)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=50, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=100, nullable=true)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="site", type="string", length=100, nullable=true)
     */
    private $site;

    /**
     * @var integer
     *
     * @ORM\Column(name="logo_org", type="integer", nullable=true)
     */
    private $logoOrg;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="blob", nullable=true)
     */
    private $logo;

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
     * @ORM\Column(name="public", type="string", length=20, nullable=true)
     */
    private $public;

    /**
     * @var integer
     *
     * @ORM\Column(name="vaccins_obligatoires", type="integer", nullable=true)
     */
    private $vaccinsObligatoires;

    /**
     * @var string
     *
     * @ORM\Column(name="date_creation", type="string", length=10, nullable=true)
     */
    private $dateCreation;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_inscrits_max", type="integer", nullable=true)
     */
    private $nbreInscritsMax;

    /**
     * @var string
     *
     * @ORM\Column(name="code_comptable", type="text", length=65535, nullable=true)
     */
    private $codeComptable;

    /**
     * @var integer
     *
     * @ORM\Column(name="psu_activation", type="integer", nullable=true)
     */
    private $psuActivation;

    /**
     * @var integer
     *
     * @ORM\Column(name="psu_unite_prevision", type="integer", nullable=true)
     */
    private $psuUnitePrevision;

    /**
     * @var integer
     *
     * @ORM\Column(name="psu_unite_presence", type="integer", nullable=true)
     */
    private $psuUnitePresence;

    /**
     * @var integer
     *
     * @ORM\Column(name="psu_tarif_forfait", type="integer", nullable=true)
     */
    private $psuTarifForfait;

    /**
     * @var integer
     *
     * @ORM\Column(name="psu_etiquette_rtt", type="integer", nullable=true)
     */
    private $psuEtiquetteRtt;



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
     * Set nom
     *
     * @param string $nom
     *
     * @return Activites
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
     * Set abrege
     *
     * @param string $abrege
     *
     * @return Activites
     */
    public function setAbrege($abrege)
    {
        $this->abrege = $abrege;

        return $this;
    }

    /**
     * Get abrege
     *
     * @return string
     */
    public function getAbrege()
    {
        return $this->abrege;
    }

    /**
     * Set coordsOrg
     *
     * @param integer $coordsOrg
     *
     * @return Activites
     */
    public function setCoordsOrg($coordsOrg)
    {
        $this->coordsOrg = $coordsOrg;

        return $this;
    }

    /**
     * Get coordsOrg
     *
     * @return integer
     */
    public function getCoordsOrg()
    {
        return $this->coordsOrg;
    }

    /**
     * Set rue
     *
     * @param string $rue
     *
     * @return Activites
     */
    public function setRue($rue)
    {
        $this->rue = $rue;

        return $this;
    }

    /**
     * Get rue
     *
     * @return string
     */
    public function getRue()
    {
        return $this->rue;
    }

    /**
     * Set cp
     *
     * @param string $cp
     *
     * @return Activites
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return string
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Activites
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return Activites
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return Activites
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Activites
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set site
     *
     * @param string $site
     *
     * @return Activites
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return string
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set logoOrg
     *
     * @param integer $logoOrg
     *
     * @return Activites
     */
    public function setLogoOrg($logoOrg)
    {
        $this->logoOrg = $logoOrg;

        return $this;
    }

    /**
     * Get logoOrg
     *
     * @return integer
     */
    public function getLogoOrg()
    {
        return $this->logoOrg;
    }

    /**
     * Set logo
     *
     * @param string $logo
     *
     * @return Activites
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set dateDebut
     *
     * @param string $dateDebut
     *
     * @return Activites
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
     * @return Activites
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
     * Set public
     *
     * @param string $public
     *
     * @return Activites
     */
    public function setPublic($public)
    {
        $this->public = $public;

        return $this;
    }

    /**
     * Get public
     *
     * @return string
     */
    public function getPublic()
    {
        return $this->public;
    }

    /**
     * Set vaccinsObligatoires
     *
     * @param integer $vaccinsObligatoires
     *
     * @return Activites
     */
    public function setVaccinsObligatoires($vaccinsObligatoires)
    {
        $this->vaccinsObligatoires = $vaccinsObligatoires;

        return $this;
    }

    /**
     * Get vaccinsObligatoires
     *
     * @return integer
     */
    public function getVaccinsObligatoires()
    {
        return $this->vaccinsObligatoires;
    }

    /**
     * Set dateCreation
     *
     * @param string $dateCreation
     *
     * @return Activites
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return string
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set nbreInscritsMax
     *
     * @param integer $nbreInscritsMax
     *
     * @return Activites
     */
    public function setNbreInscritsMax($nbreInscritsMax)
    {
        $this->nbreInscritsMax = $nbreInscritsMax;

        return $this;
    }

    /**
     * Get nbreInscritsMax
     *
     * @return integer
     */
    public function getNbreInscritsMax()
    {
        return $this->nbreInscritsMax;
    }

    /**
     * Set codeComptable
     *
     * @param string $codeComptable
     *
     * @return Activites
     */
    public function setCodeComptable($codeComptable)
    {
        $this->codeComptable = $codeComptable;

        return $this;
    }

    /**
     * Get codeComptable
     *
     * @return string
     */
    public function getCodeComptable()
    {
        return $this->codeComptable;
    }

    /**
     * Set psuActivation
     *
     * @param integer $psuActivation
     *
     * @return Activites
     */
    public function setPsuActivation($psuActivation)
    {
        $this->psuActivation = $psuActivation;

        return $this;
    }

    /**
     * Get psuActivation
     *
     * @return integer
     */
    public function getPsuActivation()
    {
        return $this->psuActivation;
    }

    /**
     * Set psuUnitePrevision
     *
     * @param integer $psuUnitePrevision
     *
     * @return Activites
     */
    public function setPsuUnitePrevision($psuUnitePrevision)
    {
        $this->psuUnitePrevision = $psuUnitePrevision;

        return $this;
    }

    /**
     * Get psuUnitePrevision
     *
     * @return integer
     */
    public function getPsuUnitePrevision()
    {
        return $this->psuUnitePrevision;
    }

    /**
     * Set psuUnitePresence
     *
     * @param integer $psuUnitePresence
     *
     * @return Activites
     */
    public function setPsuUnitePresence($psuUnitePresence)
    {
        $this->psuUnitePresence = $psuUnitePresence;

        return $this;
    }

    /**
     * Get psuUnitePresence
     *
     * @return integer
     */
    public function getPsuUnitePresence()
    {
        return $this->psuUnitePresence;
    }

    /**
     * Set psuTarifForfait
     *
     * @param integer $psuTarifForfait
     *
     * @return Activites
     */
    public function setPsuTarifForfait($psuTarifForfait)
    {
        $this->psuTarifForfait = $psuTarifForfait;

        return $this;
    }

    /**
     * Get psuTarifForfait
     *
     * @return integer
     */
    public function getPsuTarifForfait()
    {
        return $this->psuTarifForfait;
    }

    /**
     * Set psuEtiquetteRtt
     *
     * @param integer $psuEtiquetteRtt
     *
     * @return Activites
     */
    public function setPsuEtiquetteRtt($psuEtiquetteRtt)
    {
        $this->psuEtiquetteRtt = $psuEtiquetteRtt;

        return $this;
    }

    /**
     * Get psuEtiquetteRtt
     *
     * @return integer
     */
    public function getPsuEtiquetteRtt()
    {
        return $this->psuEtiquetteRtt;
    }
}
