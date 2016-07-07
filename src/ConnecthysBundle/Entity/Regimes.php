<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Regimes
 *
 * @ORM\Table(name="regimes")
 * @ORM\Entity
 */
class Regimes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDregime", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idregime;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;



    /**
     * Get idregime
     *
     * @return integer
     */
    public function getIdregime()
    {
        return $this->idregime;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Regimes
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
}
