<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypesMaladies
 *
 * @ORM\Table(name="types_maladies")
 * @ORM\Entity
 */
class TypesMaladies
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDtype_maladie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypeMaladie;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="vaccin_obligatoire", type="integer", nullable=true)
     */
    private $vaccinObligatoire;


}

