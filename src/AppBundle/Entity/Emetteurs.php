<?php

namespace AppBundle\Entity;

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


}

