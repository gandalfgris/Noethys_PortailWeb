<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrats
 *
 * @ORM\Table(name="contrats")
 * @ORM\Entity
 */
class Contrats
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDcontrat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcontrat;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDindividu", type="integer", nullable=true)
     */
    private $idindividu;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDinscription", type="integer", nullable=true)
     */
    private $idinscription;

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
     * @ORM\Column(name="observations", type="text", length=65535, nullable=true)
     */
    private $observations;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDtarif", type="integer", nullable=true)
     */
    private $idtarif;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDactivite", type="integer", nullable=true)
     */
    private $idactivite;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=100, nullable=true)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_absences_prevues", type="integer", nullable=true)
     */
    private $nbreAbsencesPrevues;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_heures_regularisation", type="integer", nullable=true)
     */
    private $nbreHeuresRegularisation;

    /**
     * @var string
     *
     * @ORM\Column(name="duree_absences_prevues", type="string", length=50, nullable=true)
     */
    private $dureeAbsencesPrevues;

    /**
     * @var string
     *
     * @ORM\Column(name="duree_heures_regularisation", type="string", length=50, nullable=true)
     */
    private $dureeHeuresRegularisation;

    /**
     * @var string
     *
     * @ORM\Column(name="duree_tolerance_depassement", type="string", length=50, nullable=true)
     */
    private $dureeToleranceDepassement;

    /**
     * @var string
     *
     * @ORM\Column(name="planning", type="string", length=900, nullable=true)
     */
    private $planning;



    /**
     * Get idcontrat
     *
     * @return integer
     */
    public function getIdcontrat()
    {
        return $this->idcontrat;
    }

    /**
     * Set idindividu
     *
     * @param integer $idindividu
     *
     * @return Contrats
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
     * Set idinscription
     *
     * @param integer $idinscription
     *
     * @return Contrats
     */
    public function setIdinscription($idinscription)
    {
        $this->idinscription = $idinscription;

        return $this;
    }

    /**
     * Get idinscription
     *
     * @return integer
     */
    public function getIdinscription()
    {
        return $this->idinscription;
    }

    /**
     * Set dateDebut
     *
     * @param string $dateDebut
     *
     * @return Contrats
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
     * @return Contrats
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
     * Set observations
     *
     * @param string $observations
     *
     * @return Contrats
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
     * Set idtarif
     *
     * @param integer $idtarif
     *
     * @return Contrats
     */
    public function setIdtarif($idtarif)
    {
        $this->idtarif = $idtarif;

        return $this;
    }

    /**
     * Get idtarif
     *
     * @return integer
     */
    public function getIdtarif()
    {
        return $this->idtarif;
    }

    /**
     * Set idactivite
     *
     * @param integer $idactivite
     *
     * @return Contrats
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
     * Set type
     *
     * @param string $type
     *
     * @return Contrats
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
     * Set nbreAbsencesPrevues
     *
     * @param integer $nbreAbsencesPrevues
     *
     * @return Contrats
     */
    public function setNbreAbsencesPrevues($nbreAbsencesPrevues)
    {
        $this->nbreAbsencesPrevues = $nbreAbsencesPrevues;

        return $this;
    }

    /**
     * Get nbreAbsencesPrevues
     *
     * @return integer
     */
    public function getNbreAbsencesPrevues()
    {
        return $this->nbreAbsencesPrevues;
    }

    /**
     * Set nbreHeuresRegularisation
     *
     * @param integer $nbreHeuresRegularisation
     *
     * @return Contrats
     */
    public function setNbreHeuresRegularisation($nbreHeuresRegularisation)
    {
        $this->nbreHeuresRegularisation = $nbreHeuresRegularisation;

        return $this;
    }

    /**
     * Get nbreHeuresRegularisation
     *
     * @return integer
     */
    public function getNbreHeuresRegularisation()
    {
        return $this->nbreHeuresRegularisation;
    }

    /**
     * Set dureeAbsencesPrevues
     *
     * @param string $dureeAbsencesPrevues
     *
     * @return Contrats
     */
    public function setDureeAbsencesPrevues($dureeAbsencesPrevues)
    {
        $this->dureeAbsencesPrevues = $dureeAbsencesPrevues;

        return $this;
    }

    /**
     * Get dureeAbsencesPrevues
     *
     * @return string
     */
    public function getDureeAbsencesPrevues()
    {
        return $this->dureeAbsencesPrevues;
    }

    /**
     * Set dureeHeuresRegularisation
     *
     * @param string $dureeHeuresRegularisation
     *
     * @return Contrats
     */
    public function setDureeHeuresRegularisation($dureeHeuresRegularisation)
    {
        $this->dureeHeuresRegularisation = $dureeHeuresRegularisation;

        return $this;
    }

    /**
     * Get dureeHeuresRegularisation
     *
     * @return string
     */
    public function getDureeHeuresRegularisation()
    {
        return $this->dureeHeuresRegularisation;
    }

    /**
     * Set dureeToleranceDepassement
     *
     * @param string $dureeToleranceDepassement
     *
     * @return Contrats
     */
    public function setDureeToleranceDepassement($dureeToleranceDepassement)
    {
        $this->dureeToleranceDepassement = $dureeToleranceDepassement;

        return $this;
    }

    /**
     * Get dureeToleranceDepassement
     *
     * @return string
     */
    public function getDureeToleranceDepassement()
    {
        return $this->dureeToleranceDepassement;
    }

    /**
     * Set planning
     *
     * @param string $planning
     *
     * @return Contrats
     */
    public function setPlanning($planning)
    {
        $this->planning = $planning;

        return $this;
    }

    /**
     * Get planning
     *
     * @return string
     */
    public function getPlanning()
    {
        return $this->planning;
    }
}
