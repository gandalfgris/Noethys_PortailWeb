<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModelesContrats
 *
 * @ORM\Table(name="modeles_contrats")
 * @ORM\Entity
 */
class ModelesContrats
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDmodele", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmodele;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=true)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDactivite", type="integer", nullable=true)
     */
    private $idactivite;

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
     * @var string
     *
     * @ORM\Column(name="donnees", type="blob", nullable=true)
     */
    private $donnees;



    /**
     * Get idmodele
     *
     * @return integer
     */
    public function getIdmodele()
    {
        return $this->idmodele;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return ModelesContrats
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
     * Set idactivite
     *
     * @param integer $idactivite
     *
     * @return ModelesContrats
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
     * Set dateDebut
     *
     * @param string $dateDebut
     *
     * @return ModelesContrats
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
     * @return ModelesContrats
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
     * @return ModelesContrats
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
     * @return ModelesContrats
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
     * Set donnees
     *
     * @param string $donnees
     *
     * @return ModelesContrats
     */
    public function setDonnees($donnees)
    {
        $this->donnees = $donnees;

        return $this;
    }

    /**
     * Get donnees
     *
     * @return string
     */
    public function getDonnees()
    {
        return $this->donnees;
    }
}
