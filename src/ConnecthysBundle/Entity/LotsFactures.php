<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LotsFactures
 *
 * @ORM\Table(name="lots_factures")
 * @ORM\Entity
 */
class LotsFactures
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDlot", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlot;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=true)
     */
    private $nom;



    /**
     * Get idlot
     *
     * @return integer
     */
    public function getIdlot()
    {
        return $this->idlot;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return LotsFactures
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
