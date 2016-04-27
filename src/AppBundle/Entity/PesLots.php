<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PesLots
 *
 * @ORM\Table(name="pes_lots")
 * @ORM\Entity
 */
class PesLots
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
     * @ORM\Column(name="nom", type="string", length=200, nullable=true)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="verrouillage", type="integer", nullable=true)
     */
    private $verrouillage;

    /**
     * @var string
     *
     * @ORM\Column(name="observations", type="text", length=65535, nullable=true)
     */
    private $observations;

    /**
     * @var integer
     *
     * @ORM\Column(name="reglement_auto", type="integer", nullable=true)
     */
    private $reglementAuto;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcompte", type="integer", nullable=true)
     */
    private $idcompte;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDmode", type="integer", nullable=true)
     */
    private $idmode;

    /**
     * @var integer
     *
     * @ORM\Column(name="exercice", type="integer", nullable=true)
     */
    private $exercice;

    /**
     * @var integer
     *
     * @ORM\Column(name="mois", type="integer", nullable=true)
     */
    private $mois;

    /**
     * @var string
     *
     * @ORM\Column(name="objet_dette", type="text", length=65535, nullable=true)
     */
    private $objetDette;

    /**
     * @var string
     *
     * @ORM\Column(name="date_emission", type="string", length=10, nullable=true)
     */
    private $dateEmission;

    /**
     * @var string
     *
     * @ORM\Column(name="date_prelevement", type="string", length=10, nullable=true)
     */
    private $datePrelevement;

    /**
     * @var string
     *
     * @ORM\Column(name="date_envoi", type="string", length=10, nullable=true)
     */
    private $dateEnvoi;

    /**
     * @var string
     *
     * @ORM\Column(name="id_bordereau", type="string", length=200, nullable=true)
     */
    private $idBordereau;

    /**
     * @var string
     *
     * @ORM\Column(name="id_poste", type="string", length=200, nullable=true)
     */
    private $idPoste;

    /**
     * @var string
     *
     * @ORM\Column(name="id_collectivite", type="string", length=200, nullable=true)
     */
    private $idCollectivite;

    /**
     * @var string
     *
     * @ORM\Column(name="code_collectivite", type="string", length=200, nullable=true)
     */
    private $codeCollectivite;

    /**
     * @var string
     *
     * @ORM\Column(name="code_budget", type="string", length=200, nullable=true)
     */
    private $codeBudget;

    /**
     * @var string
     *
     * @ORM\Column(name="code_prodloc", type="string", length=200, nullable=true)
     */
    private $codeProdloc;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_libelle", type="text", length=65535, nullable=true)
     */
    private $prelevementLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="objet_piece", type="text", length=65535, nullable=true)
     */
    private $objetPiece;


}

