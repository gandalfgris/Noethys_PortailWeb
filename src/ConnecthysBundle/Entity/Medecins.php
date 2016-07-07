<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medecins
 *
 * @ORM\Table(name="medecins")
 * @ORM\Entity
 */
class Medecins
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDmedecin", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmedecin;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=100, nullable=true)
     */
    private $prenom;

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
     * @var string
     *
     * @ORM\Column(name="tel_cabinet", type="string", length=50, nullable=true)
     */
    private $telCabinet;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_mobile", type="string", length=50, nullable=true)
     */
    private $telMobile;



    /**
     * Get idmedecin
     *
     * @return integer
     */
    public function getIdmedecin()
    {
        return $this->idmedecin;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Medecins
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Medecins
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set rueResid
     *
     * @param string $rueResid
     *
     * @return Medecins
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
     * @return Medecins
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
     * @return Medecins
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

    /**
     * Set telCabinet
     *
     * @param string $telCabinet
     *
     * @return Medecins
     */
    public function setTelCabinet($telCabinet)
    {
        $this->telCabinet = $telCabinet;

        return $this;
    }

    /**
     * Get telCabinet
     *
     * @return string
     */
    public function getTelCabinet()
    {
        return $this->telCabinet;
    }

    /**
     * Set telMobile
     *
     * @param string $telMobile
     *
     * @return Medecins
     */
    public function setTelMobile($telMobile)
    {
        $this->telMobile = $telMobile;

        return $this;
    }

    /**
     * Get telMobile
     *
     * @return string
     */
    public function getTelMobile()
    {
        return $this->telMobile;
    }
}
