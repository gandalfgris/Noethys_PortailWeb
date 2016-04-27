<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypesCotisations
 *
 * @ORM\Table(name="types_cotisations")
 * @ORM\Entity
 */
class TypesCotisations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDtype_cotisation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypeCotisation;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=200, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50, nullable=true)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="carte", type="integer", nullable=true)
     */
    private $carte;

    /**
     * @var integer
     *
     * @ORM\Column(name="defaut", type="integer", nullable=true)
     */
    private $defaut;

    /**
     * @var string
     *
     * @ORM\Column(name="code_comptable", type="text", length=65535, nullable=true)
     */
    private $codeComptable;


}

