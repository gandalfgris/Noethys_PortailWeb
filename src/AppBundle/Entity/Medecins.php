<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medecins
 *
 * @ORM\Table(name="medecins")
 * @ORM\Entity
 */
class Medecins
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDmedecin", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmedecin;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=100, nullable=true)
     */
    private $prenom;

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

    /**
     * @var string
     *
     * @ORM\Column(name="tel_cabinet", type="string", length=50, nullable=true)
     */
    private $telCabinet;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_mobile", type="string", length=50, nullable=true)
     */
    private $telMobile;


}

