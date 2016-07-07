<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CorrectionsVilles
 *
 * @ORM\Table(name="corrections_villes")
 * @ORM\Entity
 */
class CorrectionsVilles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDcorrection", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcorrection;

    /**
     * @var string
     *
     * @ORM\Column(name="mode", type="string", length=100, nullable=true)
     */
    private $mode;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDville", type="integer", nullable=true)
     */
    private $idville;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=100, nullable=true)
     */
    private $cp;



    /**
     * Get idcorrection
     *
     * @return integer
     */
    public function getIdcorrection()
    {
        return $this->idcorrection;
    }

    /**
     * Set mode
     *
     * @param string $mode
     *
     * @return CorrectionsVilles
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
     * Set idville
     *
     * @param integer $idville
     *
     * @return CorrectionsVilles
     */
    public function setIdville($idville)
    {
        $this->idville = $idville;

        return $this;
    }

    /**
     * Get idville
     *
     * @return integer
     */
    public function getIdville()
    {
        return $this->idville;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return CorrectionsVilles
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
     * Set cp
     *
     * @param string $cp
     *
     * @return CorrectionsVilles
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return string
     */
    public function getCp()
    {
        return $this->cp;
    }
}
