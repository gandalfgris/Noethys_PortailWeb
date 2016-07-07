<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Depots
 *
 * @ORM\Table(name="depots")
 * @ORM\Entity
 */
class Depots
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDdepot", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddepot;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=10, nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=200, nullable=true)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="verrouillage", type="integer", nullable=true)
     */
    private $verrouillage;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcompte", type="integer", nullable=true)
     */
    private $idcompte;

    /**
     * @var string
     *
     * @ORM\Column(name="observations", type="text", length=65535, nullable=true)
     */
    private $observations;

    /**
     * @var string
     *
     * @ORM\Column(name="code_compta", type="string", length=200, nullable=true)
     */
    private $codeCompta;



    /**
     * Get iddepot
     *
     * @return integer
     */
    public function getIddepot()
    {
        return $this->iddepot;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return Depots
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Depots
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
     * Set verrouillage
     *
     * @param integer $verrouillage
     *
     * @return Depots
     */
    public function setVerrouillage($verrouillage)
    {
        $this->verrouillage = $verrouillage;

        return $this;
    }

    /**
     * Get verrouillage
     *
     * @return integer
     */
    public function getVerrouillage()
    {
        return $this->verrouillage;
    }

    /**
     * Set idcompte
     *
     * @param integer $idcompte
     *
     * @return Depots
     */
    public function setIdcompte($idcompte)
    {
        $this->idcompte = $idcompte;

        return $this;
    }

    /**
     * Get idcompte
     *
     * @return integer
     */
    public function getIdcompte()
    {
        return $this->idcompte;
    }

    /**
     * Set observations
     *
     * @param string $observations
     *
     * @return Depots
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
     * Set codeCompta
     *
     * @param string $codeCompta
     *
     * @return Depots
     */
    public function setCodeCompta($codeCompta)
    {
        $this->codeCompta = $codeCompta;

        return $this;
    }

    /**
     * Get codeCompta
     *
     * @return string
     */
    public function getCodeCompta()
    {
        return $this->codeCompta;
    }
}
