<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Banques
 *
 * @ORM\Table(name="banques")
 * @ORM\Entity
 */
class Banques
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDbanque", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idbanque;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="rue_resid", type="string", length=255, nullable=true)
     */
    private $rueResid;

    /**
     * @var string
     *
     * @ORM\Column(name="cp_resid", type="string", length=10, nullable=true)
     */
    private $cpResid;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_resid", type="string", length=100, nullable=true)
     */
    private $villeResid;


}

