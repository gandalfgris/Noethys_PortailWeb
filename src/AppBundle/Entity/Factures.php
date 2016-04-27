<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Factures
 *
 * @ORM\Table(name="factures", indexes={@ORM\Index(name="index_factures_IDcompte_payeur", columns={"IDcompte_payeur"})})
 * @ORM\Entity
 */
class Factures
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDfacture", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfacture;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer", nullable=true)
     */
    private $numero;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcompte_payeur", type="integer", nullable=true)
     */
    private $idcomptePayeur;

    /**
     * @var string
     *
     * @ORM\Column(name="date_edition", type="string", length=10, nullable=true)
     */
    private $dateEdition;

    /**
     * @var string
     *
     * @ORM\Column(name="date_echeance", type="string", length=10, nullable=true)
     */
    private $dateEcheance;

    /**
     * @var string
     *
     * @ORM\Column(name="activites", type="text", length=65535, nullable=true)
     */
    private $activites;

    /**
     * @var string
     *
     * @ORM\Column(name="individus", type="text", length=65535, nullable=true)
     */
    private $individus;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDutilisateur", type="integer", nullable=true)
     */
    private $idutilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="date_debut", type="string", length=10, nullable=true)
     */
    private $dateDebut;

    /**
     * @var string
     *
     * @ORM\Column(name="date_fin", type="string", length=10, nullable=true)
     */
    private $dateFin;

    /**
     * @var float
     *
     * @ORM\Column(name="total", type="float", precision=10, scale=0, nullable=true)
     */
    private $total;

    /**
     * @var float
     *
     * @ORM\Column(name="regle", type="float", precision=10, scale=0, nullable=true)
     */
    private $regle;

    /**
     * @var float
     *
     * @ORM\Column(name="solde", type="float", precision=10, scale=0, nullable=true)
     */
    private $solde;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDlot", type="integer", nullable=true)
     */
    private $idlot;

    /**
     * @var string
     *
     * @ORM\Column(name="prestations", type="text", length=65535, nullable=true)
     */
    private $prestations;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=100, nullable=true)
     */
    private $etat;


}

