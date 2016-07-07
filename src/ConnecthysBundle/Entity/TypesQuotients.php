<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypesQuotients
 *
 * @ORM\Table(name="types_quotients")
 * @ORM\Entity
 */
class TypesQuotients
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDtype_quotient", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypeQuotient;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;



    /**
     * Get idtypeQuotient
     *
     * @return integer
     */
    public function getIdtypeQuotient()
    {
        return $this->idtypeQuotient;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return TypesQuotients
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
