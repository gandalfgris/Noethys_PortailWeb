<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agrements
 *
 * @ORM\Table(name="agrements", indexes={@ORM\Index(name="IDactivite", columns={"IDactivite"})})
 * @ORM\Entity
 */
class Agrements
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDagrement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idagrement;

    /**
     * @var string
     *
     * @ORM\Column(name="agrement", type="string", length=200, nullable=true)
     */
    private $agrement;

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
     * @var \Activites
     *
     * @ORM\ManyToOne(targetEntity="Activites")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDactivite", referencedColumnName="IDactivite")
     * })
     */
    private $idactivite;



    /**
     * Get idagrement
     *
     * @return integer
     */
    public function getIdagrement()
    {
        return $this->idagrement;
    }

    /**
     * Set agrement
     *
     * @param string $agrement
     *
     * @return Agrements
     */
    public function setAgrement($agrement)
    {
        $this->agrement = $agrement;

        return $this;
    }

    /**
     * Get agrement
     *
     * @return string
     */
    public function getAgrement()
    {
        return $this->agrement;
    }

    /**
     * Set dateDebut
     *
     * @param string $dateDebut
     *
     * @return Agrements
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
     * @return Agrements
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
     * Set idactivite
     *
     * @param \ConnecthysBundle\Entity\Activites $idactivite
     *
     * @return Agrements
     */
    public function setIdactivite(\ConnecthysBundle\Entity\Activites $idactivite = null)
    {
        $this->idactivite = $idactivite;

        return $this;
    }

    /**
     * Get idactivite
     *
     * @return \ConnecthysBundle\Entity\Activites
     */
    public function getIdactivite()
    {
        return $this->idactivite;
    }
}
