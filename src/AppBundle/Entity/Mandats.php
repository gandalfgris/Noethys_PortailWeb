<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mandats
 *
 * @ORM\Table(name="mandats")
 * @ORM\Entity
 */
class Mandats
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDmandat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmandat;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDfamille", type="integer", nullable=true)
     */
    private $idfamille;

    /**
     * @var string
     *
     * @ORM\Column(name="rum", type="string", length=100, nullable=true)
     */
    private $rum;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=100, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=10, nullable=true)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDbanque", type="integer", nullable=true)
     */
    private $idbanque;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDindividu", type="integer", nullable=true)
     */
    private $idindividu;

    /**
     * @var string
     *
     * @ORM\Column(name="individu_nom", type="text", length=65535, nullable=true)
     */
    private $individuNom;

    /**
     * @var string
     *
     * @ORM\Column(name="individu_rue", type="text", length=65535, nullable=true)
     */
    private $individuRue;

    /**
     * @var string
     *
     * @ORM\Column(name="individu_cp", type="string", length=50, nullable=true)
     */
    private $individuCp;

    /**
     * @var string
     *
     * @ORM\Column(name="individu_ville", type="text", length=65535, nullable=true)
     */
    private $individuVille;

    /**
     * @var string
     *
     * @ORM\Column(name="iban", type="string", length=100, nullable=true)
     */
    private $iban;

    /**
     * @var string
     *
     * @ORM\Column(name="bic", type="string", length=100, nullable=true)
     */
    private $bic;

    /**
     * @var string
     *
     * @ORM\Column(name="memo", type="text", length=65535, nullable=true)
     */
    private $memo;

    /**
     * @var string
     *
     * @ORM\Column(name="sequence", type="string", length=100, nullable=true)
     */
    private $sequence;

    /**
     * @var integer
     *
     * @ORM\Column(name="actif", type="integer", nullable=true)
     */
    private $actif;


}

