<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classes
 *
 * @ORM\Table(name="classes", indexes={@ORM\Index(name="IDecole", columns={"IDecole"})})
 * @ORM\Entity
 */
class Classes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDclasse", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idclasse;

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
     * @var string
     *
     * @ORM\Column(name="niveaux", type="text", length=65535, nullable=true)
     */
    private $niveaux;

    /**
     * @var \Ecoles
     *
     * @ORM\ManyToOne(targetEntity="Ecoles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDecole", referencedColumnName="IDecole")
     * })
     */
    private $idecole;



    /**
     * Get idclasse
     *
     * @return integer
     */
    public function getIdclasse()
    {
        return $this->idclasse;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Classes
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
     * @return Classes
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
     * @return Classes
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
     * Set niveaux
     *
     * @param string $niveaux
     *
     * @return Classes
     */
    public function setNiveaux($niveaux)
    {
        $this->niveaux = $niveaux;

        return $this;
    }

    /**
     * Get niveaux
     *
     * @return string
     */
    public function getNiveaux()
    {
        return $this->niveaux;
    }

    /**
     * Set idecole
     *
     * @param \ConnecthysBundle\Entity\Ecoles $idecole
     *
     * @return Classes
     */
    public function setIdecole(\ConnecthysBundle\Entity\Ecoles $idecole = null)
    {
        $this->idecole = $idecole;

        return $this;
    }

    /**
     * Get idecole
     *
     * @return \ConnecthysBundle\Entity\Ecoles
     */
    public function getIdecole()
    {
        return $this->idecole;
    }
}
