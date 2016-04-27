<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BadgeageProcedures
 *
 * @ORM\Table(name="badgeage_procedures")
 * @ORM\Entity
 */
class BadgeageProcedures
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDprocedure", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprocedure;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=true)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="defaut", type="integer", nullable=true)
     */
    private $defaut;

    /**
     * @var string
     *
     * @ORM\Column(name="style", type="text", length=65535, nullable=true)
     */
    private $style;

    /**
     * @var string
     *
     * @ORM\Column(name="theme", type="text", length=65535, nullable=true)
     */
    private $theme;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="text", length=65535, nullable=true)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="systeme", type="text", length=65535, nullable=true)
     */
    private $systeme;

    /**
     * @var string
     *
     * @ORM\Column(name="activites", type="text", length=65535, nullable=true)
     */
    private $activites;

    /**
     * @var integer
     *
     * @ORM\Column(name="confirmation", type="integer", nullable=true)
     */
    private $confirmation;

    /**
     * @var integer
     *
     * @ORM\Column(name="vocal", type="integer", nullable=true)
     */
    private $vocal;

    /**
     * @var integer
     *
     * @ORM\Column(name="tutoiement", type="integer", nullable=true)
     */
    private $tutoiement;


}

