<?php

namespace AppBundle\Entity;

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


}

