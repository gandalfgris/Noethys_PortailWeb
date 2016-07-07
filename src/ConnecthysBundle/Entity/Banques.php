<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Banques
 *
 * @ORM\Table(name="banques")
 * @ORM\Entity
 */
class Banques
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDbanque", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idbanque;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="rue_resid", type="string", length=255, nullable=true)
     */
    private $rueResid;

    /**
     * @var string
     *
     * @ORM\Column(name="cp_resid", type="string", length=10, nullable=true)
     */
    private $cpResid;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_resid", type="string", length=100, nullable=true)
     */
    private $villeResid;



    /**
     * Get idbanque
     *
     * @return integer
     */
    public function getIdbanque()
    {
        return $this->idbanque;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Banques
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
     * Set rueResid
     *
     * @param string $rueResid
     *
     * @return Banques
     */
    public function setRueResid($rueResid)
    {
        $this->rueResid = $rueResid;

        return $this;
    }

    /**
     * Get rueResid
     *
     * @return string
     */
    public function getRueResid()
    {
        return $this->rueResid;
    }

    /**
     * Set cpResid
     *
     * @param string $cpResid
     *
     * @return Banques
     */
    public function setCpResid($cpResid)
    {
        $this->cpResid = $cpResid;

        return $this;
    }

    /**
     * Get cpResid
     *
     * @return string
     */
    public function getCpResid()
    {
        return $this->cpResid;
    }

    /**
     * Set villeResid
     *
     * @param string $villeResid
     *
     * @return Banques
     */
    public function setVilleResid($villeResid)
    {
        $this->villeResid = $villeResid;

        return $this;
    }

    /**
     * Get villeResid
     *
     * @return string
     */
    public function getVilleResid()
    {
        return $this->villeResid;
    }
}
