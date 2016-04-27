<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prelevements
 *
 * @ORM\Table(name="prelevements")
 * @ORM\Entity
 */
class Prelevements
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDprelevement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprelevement;

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
     * @var string
     *
     * @ORM\Column(name="prelevement_etab", type="string", length=50, nullable=true)
     */
    private $prelevementEtab;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_guichet", type="string", length=50, nullable=true)
     */
    private $prelevementGuichet;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_numero", type="string", length=50, nullable=true)
     */
    private $prelevementNumero;

    /**
     * @var integer
     *
     * @ORM\Column(name="prelevement_banque", type="integer", nullable=true)
     */
    private $prelevementBanque;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_cle", type="string", length=50, nullable=true)
     */
    private $prelevementCle;

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
     * @ORM\Column(name="prelevement_reference_mandat", type="text", length=65535, nullable=true)
     */
    private $prelevementReferenceMandat;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_date_mandat", type="string", length=10, nullable=true)
     */
    private $prelevementDateMandat;

    /**
     * @var string
     *
     * @ORM\Column(name="titulaire", type="text", length=65535, nullable=true)
     */
    private $titulaire;

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

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=100, nullable=true)
     */
    private $statut;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDmandat", type="integer", nullable=true)
     */
    private $idmandat;

    /**
     * @var string
     *
     * @ORM\Column(name="sequence", type="string", length=100, nullable=true)
     */
    private $sequence;


}

