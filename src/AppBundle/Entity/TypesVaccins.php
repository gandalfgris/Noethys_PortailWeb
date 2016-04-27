<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypesVaccins
 *
 * @ORM\Table(name="types_vaccins")
 * @ORM\Entity
 */
class TypesVaccins
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDtype_vaccin", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypeVaccin;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="duree_validite", type="string", length=50, nullable=true)
     */
    private $dureeValidite;


}

