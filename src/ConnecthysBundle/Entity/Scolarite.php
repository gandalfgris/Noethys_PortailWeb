<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Scolarite
 *
 * @ORM\Table(name="scolarite", indexes={@ORM\Index(name="IDindividu", columns={"IDindividu"}), @ORM\Index(name="IDecole", columns={"IDecole"}), @ORM\Index(name="IDclasse", columns={"IDclasse"}), @ORM\Index(name="IDniveau", columns={"IDniveau"})})
 * @ORM\Entity
 */
class Scolarite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDscolarite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idscolarite;

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
     * @var \Individus
     *
     * @ORM\ManyToOne(targetEntity="Individus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDindividu", referencedColumnName="IDindividu")
     * })
     */
    private $idindividu;

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
     * @var \Classes
     *
     * @ORM\ManyToOne(targetEntity="Classes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDclasse", referencedColumnName="IDclasse")
     * })
     */
    private $idclasse;

    /**
     * @var \NiveauxScolaires
     *
     * @ORM\ManyToOne(targetEntity="NiveauxScolaires")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDniveau", referencedColumnName="IDniveau")
     * })
     */
    private $idniveau;



    /**
     * Get idscolarite
     *
     * @return integer
     */
    public function getIdscolarite()
    {
        return $this->idscolarite;
    }

    /**
     * Set dateDebut
     *
     * @param string $dateDebut
     *
     * @return Scolarite
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
     * @return Scolarite
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
     * Set idindividu
     *
     * @param \ConnecthysBundle\Entity\Individus $idindividu
     *
     * @return Scolarite
     */
    public function setIdindividu(\ConnecthysBundle\Entity\Individus $idindividu = null)
    {
        $this->idindividu = $idindividu;

        return $this;
    }

    /**
     * Get idindividu
     *
     * @return \ConnecthysBundle\Entity\Individus
     */
    public function getIdindividu()
    {
        return $this->idindividu;
    }

    /**
     * Set idecole
     *
     * @param \ConnecthysBundle\Entity\Ecoles $idecole
     *
     * @return Scolarite
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

    /**
     * Set idclasse
     *
     * @param \ConnecthysBundle\Entity\Classes $idclasse
     *
     * @return Scolarite
     */
    public function setIdclasse(\ConnecthysBundle\Entity\Classes $idclasse = null)
    {
        $this->idclasse = $idclasse;

        return $this;
    }

    /**
     * Get idclasse
     *
     * @return \ConnecthysBundle\Entity\Classes
     */
    public function getIdclasse()
    {
        return $this->idclasse;
    }

    /**
     * Set idniveau
     *
     * @param \ConnecthysBundle\Entity\NiveauxScolaires $idniveau
     *
     * @return Scolarite
     */
    public function setIdniveau(\ConnecthysBundle\Entity\NiveauxScolaires $idniveau = null)
    {
        $this->idniveau = $idniveau;

        return $this;
    }

    /**
     * Get idniveau
     *
     * @return \ConnecthysBundle\Entity\NiveauxScolaires
     */
    public function getIdniveau()
    {
        return $this->idniveau;
    }
}
