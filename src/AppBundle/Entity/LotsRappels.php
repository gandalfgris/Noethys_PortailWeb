<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LotsRappels
 *
 * @ORM\Table(name="lots_rappels")
 * @ORM\Entity
 */
class LotsRappels
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


}

