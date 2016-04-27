<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reglements
 *
 * @ORM\Table(name="reglements", indexes={@ORM\Index(name="index_reglements_IDcompte_payeur", columns={"IDcompte_payeur"})})
 * @ORM\Entity
 */
class Reglements
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDreglement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreglement;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcompte_payeur", type="integer", nullable=true)
     */
    private $idcomptePayeur;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=10, nullable=true)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDmode", type="integer", nullable=true)
     */
    private $idmode;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDemetteur", type="integer", nullable=true)
     */
    private $idemetteur;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_piece", type="string", length=30, nullable=true)
     */
    private $numeroPiece;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", precision=10, scale=0, nullable=true)
     */
    private $montant;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDpayeur", type="integer", nullable=true)
     */
    private $idpayeur;

    /**
     * @var string
     *
     * @ORM\Column(name="observations", type="string", length=200, nullable=true)
     */
    private $observations;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_quittancier", type="string", length=30, nullable=true)
     */
    private $numeroQuittancier;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDprestation_frais", type="integer", nullable=true)
     */
    private $idprestationFrais;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcompte", type="integer", nullable=true)
     */
    private $idcompte;

    /**
     * @var string
     *
     * @ORM\Column(name="date_differe", type="string", length=10, nullable=true)
     */
    private $dateDiffere;

    /**
     * @var integer
     *
     * @ORM\Column(name="encaissement_attente", type="integer", nullable=true)
     */
    private $encaissementAttente;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDdepot", type="integer", nullable=true)
     */
    private $iddepot;

    /**
     * @var string
     *
     * @ORM\Column(name="date_saisie", type="string", length=10, nullable=true)
     */
    private $dateSaisie;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDutilisateur", type="integer", nullable=true)
     */
    private $idutilisateur;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDprelevement", type="integer", nullable=true)
     */
    private $idprelevement;

    /**
     * @var string
     *
     * @ORM\Column(name="avis_depot", type="string", length=10, nullable=true)
     */
    private $avisDepot;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDpiece", type="integer", nullable=true)
     */
    private $idpiece;


}

