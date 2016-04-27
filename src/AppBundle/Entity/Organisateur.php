<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Organisateur
 *
 * @ORM\Table(name="organisateur")
 * @ORM\Entity
 */
class Organisateur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDorganisateur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idorganisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=200, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="rue", type="string", length=200, nullable=true)
     */
    private $rue;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=10, nullable=true)
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=100, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=50, nullable=true)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=50, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=100, nullable=true)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="site", type="string", length=100, nullable=true)
     */
    private $site;

    /**
     * @var string
     *
     * @ORM\Column(name="num_agrement", type="string", length=100, nullable=true)
     */
    private $numAgrement;

    /**
     * @var string
     *
     * @ORM\Column(name="num_siret", type="string", length=100, nullable=true)
     */
    private $numSiret;

    /**
     * @var string
     *
     * @ORM\Column(name="code_ape", type="string", length=100, nullable=true)
     */
    private $codeApe;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="blob", nullable=true)
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="gps", type="string", length=200, nullable=true)
     */
    private $gps;


}

