<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypesSieste
 *
 * @ORM\Table(name="types_sieste")
 * @ORM\Entity
 */
class TypesSieste
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDtype_sieste", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypeSieste;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;



    /**
     * Get idtypeSieste
     *
     * @return integer
     */
    public function getIdtypeSieste()
    {
        return $this->idtypeSieste;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return TypesSieste
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
