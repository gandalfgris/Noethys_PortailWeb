<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UnitesRemplissage
 *
 * @ORM\Table(name="unites_remplissage", indexes={@ORM\Index(name="IDactivite", columns={"IDactivite"})})
 * @ORM\Entity
 */
class UnitesRemplissage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDunite_remplissage", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduniteRemplissage;

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
     * @var integer
     *
     * @ORM\Column(name="seuil_alerte", type="integer", nullable=true)
     */
    private $seuilAlerte;

    /**
     * @var string
     *
     * @ORM\Column(name="heure_min", type="string", length=10, nullable=true)
     */
    private $heureMin;

    /**
     * @var string
     *
     * @ORM\Column(name="heure_max", type="string", length=10, nullable=true)
     */
    private $heureMax;

    /**
     * @var integer
     *
     * @ORM\Column(name="afficher_page_accueil", type="integer", nullable=true)
     */
    private $afficherPageAccueil;

    /**
     * @var integer
     *
     * @ORM\Column(name="afficher_grille_conso", type="integer", nullable=true)
     */
    private $afficherGrilleConso;

    /**
     * @var string
     *
     * @ORM\Column(name="etiquettes", type="text", length=65535, nullable=true)
     */
    private $etiquettes;



    /**
     * Get iduniteRemplissage
     *
     * @return integer
     */
    public function getIduniteRemplissage()
    {
        return $this->iduniteRemplissage;
    }

    /**
     * Set idactivite
     *
     * @param integer $idactivite
     *
     * @return UnitesRemplissage
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
     * @return UnitesRemplissage
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
     * @return UnitesRemplissage
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
     * @return UnitesRemplissage
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
     * Set dateDebut
     *
     * @param string $dateDebut
     *
     * @return UnitesRemplissage
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
     * @return UnitesRemplissage
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
     * Set seuilAlerte
     *
     * @param integer $seuilAlerte
     *
     * @return UnitesRemplissage
     */
    public function setSeuilAlerte($seuilAlerte)
    {
        $this->seuilAlerte = $seuilAlerte;

        return $this;
    }

    /**
     * Get seuilAlerte
     *
     * @return integer
     */
    public function getSeuilAlerte()
    {
        return $this->seuilAlerte;
    }

    /**
     * Set heureMin
     *
     * @param string $heureMin
     *
     * @return UnitesRemplissage
     */
    public function setHeureMin($heureMin)
    {
        $this->heureMin = $heureMin;

        return $this;
    }

    /**
     * Get heureMin
     *
     * @return string
     */
    public function getHeureMin()
    {
        return $this->heureMin;
    }

    /**
     * Set heureMax
     *
     * @param string $heureMax
     *
     * @return UnitesRemplissage
     */
    public function setHeureMax($heureMax)
    {
        $this->heureMax = $heureMax;

        return $this;
    }

    /**
     * Get heureMax
     *
     * @return string
     */
    public function getHeureMax()
    {
        return $this->heureMax;
    }

    /**
     * Set afficherPageAccueil
     *
     * @param integer $afficherPageAccueil
     *
     * @return UnitesRemplissage
     */
    public function setAfficherPageAccueil($afficherPageAccueil)
    {
        $this->afficherPageAccueil = $afficherPageAccueil;

        return $this;
    }

    /**
     * Get afficherPageAccueil
     *
     * @return integer
     */
    public function getAfficherPageAccueil()
    {
        return $this->afficherPageAccueil;
    }

    /**
     * Set afficherGrilleConso
     *
     * @param integer $afficherGrilleConso
     *
     * @return UnitesRemplissage
     */
    public function setAfficherGrilleConso($afficherGrilleConso)
    {
        $this->afficherGrilleConso = $afficherGrilleConso;

        return $this;
    }

    /**
     * Get afficherGrilleConso
     *
     * @return integer
     */
    public function getAfficherGrilleConso()
    {
        return $this->afficherGrilleConso;
    }

    /**
     * Set etiquettes
     *
     * @param string $etiquettes
     *
     * @return UnitesRemplissage
     */
    public function setEtiquettes($etiquettes)
    {
        $this->etiquettes = $etiquettes;

        return $this;
    }

    /**
     * Get etiquettes
     *
     * @return string
     */
    public function getEtiquettes()
    {
        return $this->etiquettes;
    }
}
