<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Unites
 *
 * @ORM\Table(name="unites", indexes={@ORM\Index(name="IDactivite", columns={"IDactivite"})})
 * @ORM\Entity
 */
class Unites
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDunite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idunite;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDactivite", type="integer", nullable=true)
     */
    private $idactivite;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordre", type="integer", nullable=true)
     */
    private $ordre;

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
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="heure_debut", type="string", length=10, nullable=true)
     */
    private $heureDebut;

    /**
     * @var integer
     *
     * @ORM\Column(name="heure_debut_fixe", type="integer", nullable=true)
     */
    private $heureDebutFixe;

    /**
     * @var string
     *
     * @ORM\Column(name="heure_fin", type="string", length=10, nullable=true)
     */
    private $heureFin;

    /**
     * @var integer
     *
     * @ORM\Column(name="heure_fin_fixe", type="integer", nullable=true)
     */
    private $heureFinFixe;

    /**
     * @var integer
     *
     * @ORM\Column(name="repas", type="integer", nullable=true)
     */
    private $repas;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDrestaurateur", type="integer", nullable=true)
     */
    private $idrestaurateur;

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
     * @ORM\Column(name="touche_raccourci", type="string", length=30, nullable=true)
     */
    private $toucheRaccourci;

    /**
     * @var integer
     *
     * @ORM\Column(name="largeur", type="integer", nullable=true)
     */
    private $largeur;

    /**
     * @var string
     *
     * @ORM\Column(name="coeff", type="string", length=50, nullable=true)
     */
    private $coeff;

    /**
     * @var integer
     *
     * @ORM\Column(name="autogen_active", type="integer", nullable=true)
     */
    private $autogenActive;

    /**
     * @var string
     *
     * @ORM\Column(name="autogen_conditions", type="text", length=65535, nullable=true)
     */
    private $autogenConditions;

    /**
     * @var string
     *
     * @ORM\Column(name="autogen_parametres", type="text", length=65535, nullable=true)
     */
    private $autogenParametres;



    /**
     * Get idunite
     *
     * @return integer
     */
    public function getIdunite()
    {
        return $this->idunite;
    }

    /**
     * Set idactivite
     *
     * @param integer $idactivite
     *
     * @return Unites
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
     * Set ordre
     *
     * @param integer $ordre
     *
     * @return Unites
     */
    public function setOrdre($ordre)
    {
        $this->ordre = $ordre;

        return $this;
    }

    /**
     * Get ordre
     *
     * @return integer
     */
    public function getOrdre()
    {
        return $this->ordre;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Unites
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
     * @return Unites
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
     * Set type
     *
     * @param string $type
     *
     * @return Unites
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set heureDebut
     *
     * @param string $heureDebut
     *
     * @return Unites
     */
    public function setHeureDebut($heureDebut)
    {
        $this->heureDebut = $heureDebut;

        return $this;
    }

    /**
     * Get heureDebut
     *
     * @return string
     */
    public function getHeureDebut()
    {
        return $this->heureDebut;
    }

    /**
     * Set heureDebutFixe
     *
     * @param integer $heureDebutFixe
     *
     * @return Unites
     */
    public function setHeureDebutFixe($heureDebutFixe)
    {
        $this->heureDebutFixe = $heureDebutFixe;

        return $this;
    }

    /**
     * Get heureDebutFixe
     *
     * @return integer
     */
    public function getHeureDebutFixe()
    {
        return $this->heureDebutFixe;
    }

    /**
     * Set heureFin
     *
     * @param string $heureFin
     *
     * @return Unites
     */
    public function setHeureFin($heureFin)
    {
        $this->heureFin = $heureFin;

        return $this;
    }

    /**
     * Get heureFin
     *
     * @return string
     */
    public function getHeureFin()
    {
        return $this->heureFin;
    }

    /**
     * Set heureFinFixe
     *
     * @param integer $heureFinFixe
     *
     * @return Unites
     */
    public function setHeureFinFixe($heureFinFixe)
    {
        $this->heureFinFixe = $heureFinFixe;

        return $this;
    }

    /**
     * Get heureFinFixe
     *
     * @return integer
     */
    public function getHeureFinFixe()
    {
        return $this->heureFinFixe;
    }

    /**
     * Set repas
     *
     * @param integer $repas
     *
     * @return Unites
     */
    public function setRepas($repas)
    {
        $this->repas = $repas;

        return $this;
    }

    /**
     * Get repas
     *
     * @return integer
     */
    public function getRepas()
    {
        return $this->repas;
    }

    /**
     * Set idrestaurateur
     *
     * @param integer $idrestaurateur
     *
     * @return Unites
     */
    public function setIdrestaurateur($idrestaurateur)
    {
        $this->idrestaurateur = $idrestaurateur;

        return $this;
    }

    /**
     * Get idrestaurateur
     *
     * @return integer
     */
    public function getIdrestaurateur()
    {
        return $this->idrestaurateur;
    }

    /**
     * Set dateDebut
     *
     * @param string $dateDebut
     *
     * @return Unites
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
     * @return Unites
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
     * Set toucheRaccourci
     *
     * @param string $toucheRaccourci
     *
     * @return Unites
     */
    public function setToucheRaccourci($toucheRaccourci)
    {
        $this->toucheRaccourci = $toucheRaccourci;

        return $this;
    }

    /**
     * Get toucheRaccourci
     *
     * @return string
     */
    public function getToucheRaccourci()
    {
        return $this->toucheRaccourci;
    }

    /**
     * Set largeur
     *
     * @param integer $largeur
     *
     * @return Unites
     */
    public function setLargeur($largeur)
    {
        $this->largeur = $largeur;

        return $this;
    }

    /**
     * Get largeur
     *
     * @return integer
     */
    public function getLargeur()
    {
        return $this->largeur;
    }

    /**
     * Set coeff
     *
     * @param string $coeff
     *
     * @return Unites
     */
    public function setCoeff($coeff)
    {
        $this->coeff = $coeff;

        return $this;
    }

    /**
     * Get coeff
     *
     * @return string
     */
    public function getCoeff()
    {
        return $this->coeff;
    }

    /**
     * Set autogenActive
     *
     * @param integer $autogenActive
     *
     * @return Unites
     */
    public function setAutogenActive($autogenActive)
    {
        $this->autogenActive = $autogenActive;

        return $this;
    }

    /**
     * Get autogenActive
     *
     * @return integer
     */
    public function getAutogenActive()
    {
        return $this->autogenActive;
    }

    /**
     * Set autogenConditions
     *
     * @param string $autogenConditions
     *
     * @return Unites
     */
    public function setAutogenConditions($autogenConditions)
    {
        $this->autogenConditions = $autogenConditions;

        return $this;
    }

    /**
     * Get autogenConditions
     *
     * @return string
     */
    public function getAutogenConditions()
    {
        return $this->autogenConditions;
    }

    /**
     * Set autogenParametres
     *
     * @param string $autogenParametres
     *
     * @return Unites
     */
    public function setAutogenParametres($autogenParametres)
    {
        $this->autogenParametres = $autogenParametres;

        return $this;
    }

    /**
     * Get autogenParametres
     *
     * @return string
     */
    public function getAutogenParametres()
    {
        return $this->autogenParametres;
    }
}
