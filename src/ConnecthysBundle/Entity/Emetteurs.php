<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Emetteurs
 *
 * @ORM\Table(name="emetteurs")
 * @ORM\Entity
 */
class Emetteurs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDemetteur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idemetteur;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDmode", type="integer", nullable=true)
     */
    private $idmode;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=200, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="blob", nullable=true)
     */
    private $image;



    /**
     * Get idemetteur
     *
     * @return integer
     */
    public function getIdemetteur()
    {
        return $this->idemetteur;
    }

    /**
     * Set idmode
     *
     * @param integer $idmode
     *
     * @return Emetteurs
     */
    public function setIdmode($idmode)
    {
        $this->idmode = $idmode;

        return $this;
    }

    /**
     * Get idmode
     *
     * @return integer
     */
    public function getIdmode()
    {
        return $this->idmode;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Emetteurs
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
     * Set image
     *
     * @param string $image
     *
     * @return Emetteurs
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }
}
