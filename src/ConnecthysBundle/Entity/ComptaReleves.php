<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComptaReleves
 *
 * @ORM\Table(name="compta_releves", indexes={@ORM\Index(name="IDcompte_bancaire", columns={"IDcompte_bancaire"})})
 * @ORM\Entity
 */
class ComptaReleves
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDreleve", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreleve;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=true)
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
     * @var integer
     *
     * @ORM\Column(name="IDcompte_bancaire", type="integer", nullable=true)
     */
    private $idcompteBancaire;



    /**
     * Get idreleve
     *
     * @return integer
     */
    public function getIdreleve()
    {
        return $this->idreleve;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return ComptaReleves
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
     * @return ComptaReleves
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
     * @return ComptaReleves
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
     * Set idcompteBancaire
     *
     * @param integer $idcompteBancaire
     *
     * @return ComptaReleves
     */
    public function setIdcompteBancaire($idcompteBancaire)
    {
        $this->idcompteBancaire = $idcompteBancaire;

        return $this;
    }

    /**
     * Get idcompteBancaire
     *
     * @return integer
     */
    public function getIdcompteBancaire()
    {
        return $this->idcompteBancaire;
    }
}
