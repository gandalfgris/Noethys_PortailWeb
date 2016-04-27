<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Caisses
 *
 * @ORM\Table(name="caisses")
 * @ORM\Entity
 */
class Caisses
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDcaisse", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcaisse;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDregime", type="integer", nullable=true)
     */
    private $idregime;


}

