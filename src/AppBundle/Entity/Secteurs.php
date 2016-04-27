<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Secteurs
 *
 * @ORM\Table(name="secteurs")
 * @ORM\Entity
 */
class Secteurs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDsecteur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsecteur;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;


}

