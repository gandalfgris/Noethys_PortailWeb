<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transports
 *
 * @ORM\Table(name="transports", indexes={@ORM\Index(name="IDindividu", columns={"IDindividu"}), @ORM\Index(name="IDcompagnie", columns={"IDcompagnie"}), @ORM\Index(name="IDligne", columns={"IDligne"})})
 * @ORM\Entity
 */
class Transports
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDtransport", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtransport;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDindividu", type="integer", nullable=true)
     */
    private $idindividu;

    /**
     * @var string
     *
     * @ORM\Column(name="mode", type="string", length=100, nullable=true)
     */
    private $mode;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=100, nullable=true)
     */
    private $categorie;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcompagnie", type="integer", nullable=true)
     */
    private $idcompagnie;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDligne", type="integer", nullable=true)
     */
    private $idligne;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=200, nullable=true)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="details", type="text", length=65535, nullable=true)
     */
    private $details;

    /**
     * @var string
     *
     * @ORM\Column(name="observations", type="text", length=65535, nullable=true)
     */
    private $observations;

    /**
     * @var string
     *
     * @ORM\Column(name="depart_date", type="string", length=10, nullable=true)
     */
    private $departDate;

    /**
     * @var string
     *
     * @ORM\Column(name="depart_heure", type="string", length=10, nullable=true)
     */
    private $departHeure;

    /**
     * @var integer
     *
     * @ORM\Column(name="depart_IDarret", type="integer", nullable=true)
     */
    private $departIdarret;

    /**
     * @var integer
     *
     * @ORM\Column(name="depart_IDlieu", type="integer", nullable=true)
     */
    private $departIdlieu;

    /**
     * @var string
     *
     * @ORM\Column(name="depart_localisation", type="text", length=65535, nullable=true)
     */
    private $departLocalisation;

    /**
     * @var string
     *
     * @ORM\Column(name="arrivee_date", type="string", length=10, nullable=true)
     */
    private $arriveeDate;

    /**
     * @var string
     *
     * @ORM\Column(name="arrivee_heure", type="string", length=10, nullable=true)
     */
    private $arriveeHeure;

    /**
     * @var integer
     *
     * @ORM\Column(name="arrivee_IDarret", type="integer", nullable=true)
     */
    private $arriveeIdarret;

    /**
     * @var integer
     *
     * @ORM\Column(name="arrivee_IDlieu", type="integer", nullable=true)
     */
    private $arriveeIdlieu;

    /**
     * @var string
     *
     * @ORM\Column(name="arrivee_localisation", type="text", length=65535, nullable=true)
     */
    private $arriveeLocalisation;

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
     * @ORM\Column(name="actif", type="integer", nullable=true)
     */
    private $actif;

    /**
     * @var string
     *
     * @ORM\Column(name="jours_scolaires", type="string", length=100, nullable=true)
     */
    private $joursScolaires;

    /**
     * @var string
     *
     * @ORM\Column(name="jours_vacances", type="string", length=100, nullable=true)
     */
    private $joursVacances;

    /**
     * @var string
     *
     * @ORM\Column(name="unites", type="text", length=65535, nullable=true)
     */
    private $unites;

    /**
     * @var integer
     *
     * @ORM\Column(name="prog", type="integer", nullable=true)
     */
    private $prog;



    /**
     * Get idtransport
     *
     * @return integer
     */
    public function getIdtransport()
    {
        return $this->idtransport;
    }

    /**
     * Set idindividu
     *
     * @param integer $idindividu
     *
     * @return Transports
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
     * Set mode
     *
     * @param string $mode
     *
     * @return Transports
     */
    public function setMode($mode)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * Get mode
     *
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     *
     * @return Transports
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set idcompagnie
     *
     * @param integer $idcompagnie
     *
     * @return Transports
     */
    public function setIdcompagnie($idcompagnie)
    {
        $this->idcompagnie = $idcompagnie;

        return $this;
    }

    /**
     * Get idcompagnie
     *
     * @return integer
     */
    public function getIdcompagnie()
    {
        return $this->idcompagnie;
    }

    /**
     * Set idligne
     *
     * @param integer $idligne
     *
     * @return Transports
     */
    public function setIdligne($idligne)
    {
        $this->idligne = $idligne;

        return $this;
    }

    /**
     * Get idligne
     *
     * @return integer
     */
    public function getIdligne()
    {
        return $this->idligne;
    }

    /**
     * Set numero
     *
     * @param string $numero
     *
     * @return Transports
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set details
     *
     * @param string $details
     *
     * @return Transports
     */
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get details
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Set observations
     *
     * @param string $observations
     *
     * @return Transports
     */
    public function setObservations($observations)
    {
        $this->observations = $observations;

        return $this;
    }

    /**
     * Get observations
     *
     * @return string
     */
    public function getObservations()
    {
        return $this->observations;
    }

    /**
     * Set departDate
     *
     * @param string $departDate
     *
     * @return Transports
     */
    public function setDepartDate($departDate)
    {
        $this->departDate = $departDate;

        return $this;
    }

    /**
     * Get departDate
     *
     * @return string
     */
    public function getDepartDate()
    {
        return $this->departDate;
    }

    /**
     * Set departHeure
     *
     * @param string $departHeure
     *
     * @return Transports
     */
    public function setDepartHeure($departHeure)
    {
        $this->departHeure = $departHeure;

        return $this;
    }

    /**
     * Get departHeure
     *
     * @return string
     */
    public function getDepartHeure()
    {
        return $this->departHeure;
    }

    /**
     * Set departIdarret
     *
     * @param integer $departIdarret
     *
     * @return Transports
     */
    public function setDepartIdarret($departIdarret)
    {
        $this->departIdarret = $departIdarret;

        return $this;
    }

    /**
     * Get departIdarret
     *
     * @return integer
     */
    public function getDepartIdarret()
    {
        return $this->departIdarret;
    }

    /**
     * Set departIdlieu
     *
     * @param integer $departIdlieu
     *
     * @return Transports
     */
    public function setDepartIdlieu($departIdlieu)
    {
        $this->departIdlieu = $departIdlieu;

        return $this;
    }

    /**
     * Get departIdlieu
     *
     * @return integer
     */
    public function getDepartIdlieu()
    {
        return $this->departIdlieu;
    }

    /**
     * Set departLocalisation
     *
     * @param string $departLocalisation
     *
     * @return Transports
     */
    public function setDepartLocalisation($departLocalisation)
    {
        $this->departLocalisation = $departLocalisation;

        return $this;
    }

    /**
     * Get departLocalisation
     *
     * @return string
     */
    public function getDepartLocalisation()
    {
        return $this->departLocalisation;
    }

    /**
     * Set arriveeDate
     *
     * @param string $arriveeDate
     *
     * @return Transports
     */
    public function setArriveeDate($arriveeDate)
    {
        $this->arriveeDate = $arriveeDate;

        return $this;
    }

    /**
     * Get arriveeDate
     *
     * @return string
     */
    public function getArriveeDate()
    {
        return $this->arriveeDate;
    }

    /**
     * Set arriveeHeure
     *
     * @param string $arriveeHeure
     *
     * @return Transports
     */
    public function setArriveeHeure($arriveeHeure)
    {
        $this->arriveeHeure = $arriveeHeure;

        return $this;
    }

    /**
     * Get arriveeHeure
     *
     * @return string
     */
    public function getArriveeHeure()
    {
        return $this->arriveeHeure;
    }

    /**
     * Set arriveeIdarret
     *
     * @param integer $arriveeIdarret
     *
     * @return Transports
     */
    public function setArriveeIdarret($arriveeIdarret)
    {
        $this->arriveeIdarret = $arriveeIdarret;

        return $this;
    }

    /**
     * Get arriveeIdarret
     *
     * @return integer
     */
    public function getArriveeIdarret()
    {
        return $this->arriveeIdarret;
    }

    /**
     * Set arriveeIdlieu
     *
     * @param integer $arriveeIdlieu
     *
     * @return Transports
     */
    public function setArriveeIdlieu($arriveeIdlieu)
    {
        $this->arriveeIdlieu = $arriveeIdlieu;

        return $this;
    }

    /**
     * Get arriveeIdlieu
     *
     * @return integer
     */
    public function getArriveeIdlieu()
    {
        return $this->arriveeIdlieu;
    }

    /**
     * Set arriveeLocalisation
     *
     * @param string $arriveeLocalisation
     *
     * @return Transports
     */
    public function setArriveeLocalisation($arriveeLocalisation)
    {
        $this->arriveeLocalisation = $arriveeLocalisation;

        return $this;
    }

    /**
     * Get arriveeLocalisation
     *
     * @return string
     */
    public function getArriveeLocalisation()
    {
        return $this->arriveeLocalisation;
    }

    /**
     * Set dateDebut
     *
     * @param string $dateDebut
     *
     * @return Transports
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
     * @return Transports
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
     * Set actif
     *
     * @param integer $actif
     *
     * @return Transports
     */
    public function setActif($actif)
    {
        $this->actif = $actif;

        return $this;
    }

    /**
     * Get actif
     *
     * @return integer
     */
    public function getActif()
    {
        return $this->actif;
    }

    /**
     * Set joursScolaires
     *
     * @param string $joursScolaires
     *
     * @return Transports
     */
    public function setJoursScolaires($joursScolaires)
    {
        $this->joursScolaires = $joursScolaires;

        return $this;
    }

    /**
     * Get joursScolaires
     *
     * @return string
     */
    public function getJoursScolaires()
    {
        return $this->joursScolaires;
    }

    /**
     * Set joursVacances
     *
     * @param string $joursVacances
     *
     * @return Transports
     */
    public function setJoursVacances($joursVacances)
    {
        $this->joursVacances = $joursVacances;

        return $this;
    }

    /**
     * Get joursVacances
     *
     * @return string
     */
    public function getJoursVacances()
    {
        return $this->joursVacances;
    }

    /**
     * Set unites
     *
     * @param string $unites
     *
     * @return Transports
     */
    public function setUnites($unites)
    {
        $this->unites = $unites;

        return $this;
    }

    /**
     * Get unites
     *
     * @return string
     */
    public function getUnites()
    {
        return $this->unites;
    }

    /**
     * Set prog
     *
     * @param integer $prog
     *
     * @return Transports
     */
    public function setProg($prog)
    {
        $this->prog = $prog;

        return $this;
    }

    /**
     * Get prog
     *
     * @return integer
     */
    public function getProg()
    {
        return $this->prog;
    }
}
