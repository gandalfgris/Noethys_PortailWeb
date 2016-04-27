<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PesPieces
 *
 * @ORM\Table(name="pes_pieces")
 * @ORM\Entity
 */
class PesPieces
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDpiece", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpiece;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDlot", type="integer", nullable=true)
     */
    private $idlot;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDfamille", type="integer", nullable=true)
     */
    private $idfamille;

    /**
     * @var integer
     *
     * @ORM\Column(name="prelevement", type="integer", nullable=true)
     */
    private $prelevement;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_iban", type="string", length=100, nullable=true)
     */
    private $prelevementIban;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_bic", type="string", length=100, nullable=true)
     */
    private $prelevementBic;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_rum", type="text", length=65535, nullable=true)
     */
    private $prelevementRum;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_date_mandat", type="string", length=10, nullable=true)
     */
    private $prelevementDateMandat;

    /**
     * @var integer
     *
     * @ORM\Column(name="prelevement_IDmandat", type="integer", nullable=true)
     */
    private $prelevementIdmandat;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_sequence", type="string", length=100, nullable=true)
     */
    private $prelevementSequence;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_titulaire", type="text", length=65535, nullable=true)
     */
    private $prelevementTitulaire;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_statut", type="string", length=100, nullable=true)
     */
    private $prelevementStatut;

    /**
     * @var integer
     *
     * @ORM\Column(name="titulaire_helios", type="integer", nullable=true)
     */
    private $titulaireHelios;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="text", length=65535, nullable=true)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDfacture", type="integer", nullable=true)
     */
    private $idfacture;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer", nullable=true)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="text", length=65535, nullable=true)
     */
    private $libelle;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", precision=10, scale=0, nullable=true)
     */
    private $montant;


}

