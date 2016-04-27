<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComptaOperations
 *
 * @ORM\Table(name="compta_operations")
 * @ORM\Entity
 */
class ComptaOperations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDoperation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idoperation;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=200, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=10, nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="text", length=65535, nullable=true)
     */
    private $libelle;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDtiers", type="integer", nullable=true)
     */
    private $idtiers;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDmode", type="integer", nullable=true)
     */
    private $idmode;

    /**
     * @var string
     *
     * @ORM\Column(name="num_piece", type="string", length=200, nullable=true)
     */
    private $numPiece;

    /**
     * @var string
     *
     * @ORM\Column(name="ref_piece", type="string", length=200, nullable=true)
     */
    private $refPiece;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcompte_bancaire", type="integer", nullable=true)
     */
    private $idcompteBancaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDreleve", type="integer", nullable=true)
     */
    private $idreleve;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", precision=10, scale=0, nullable=true)
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="observations", type="text", length=65535, nullable=true)
     */
    private $observations;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDvirement", type="integer", nullable=true)
     */
    private $idvirement;


}

