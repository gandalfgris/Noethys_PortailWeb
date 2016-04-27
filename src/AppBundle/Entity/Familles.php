<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Familles
 *
 * @ORM\Table(name="familles", indexes={@ORM\Index(name="index_familles_IDcompte_payeur", columns={"IDcompte_payeur"})})
 * @ORM\Entity
 */
class Familles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDfamille", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfamille;

    /**
     * @var string
     *
     * @ORM\Column(name="date_creation", type="string", length=10, nullable=true)
     */
    private $dateCreation;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcompte_payeur", type="integer", nullable=true)
     */
    private $idcomptePayeur;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcaisse", type="integer", nullable=true)
     */
    private $idcaisse;

    /**
     * @var string
     *
     * @ORM\Column(name="num_allocataire", type="string", length=100, nullable=true)
     */
    private $numAllocataire;

    /**
     * @var integer
     *
     * @ORM\Column(name="allocataire", type="integer", nullable=true)
     */
    private $allocataire;

    /**
     * @var integer
     *
     * @ORM\Column(name="internet_actif", type="integer", nullable=true)
     */
    private $internetActif;

    /**
     * @var string
     *
     * @ORM\Column(name="internet_identifiant", type="string", length=50, nullable=true)
     */
    private $internetIdentifiant;

    /**
     * @var string
     *
     * @ORM\Column(name="internet_mdp", type="string", length=50, nullable=true)
     */
    private $internetMdp;

    /**
     * @var string
     *
     * @ORM\Column(name="memo", type="text", length=65535, nullable=true)
     */
    private $memo;

    /**
     * @var integer
     *
     * @ORM\Column(name="prelevement_activation", type="integer", nullable=true)
     */
    private $prelevementActivation;

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
     * @var string
     *
     * @ORM\Column(name="prelevement_cle", type="string", length=50, nullable=true)
     */
    private $prelevementCle;

    /**
     * @var integer
     *
     * @ORM\Column(name="prelevement_banque", type="integer", nullable=true)
     */
    private $prelevementBanque;

    /**
     * @var integer
     *
     * @ORM\Column(name="prelevement_individu", type="integer", nullable=true)
     */
    private $prelevementIndividu;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_nom", type="string", length=200, nullable=true)
     */
    private $prelevementNom;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_rue", type="text", length=65535, nullable=true)
     */
    private $prelevementRue;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_cp", type="string", length=50, nullable=true)
     */
    private $prelevementCp;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_ville", type="text", length=65535, nullable=true)
     */
    private $prelevementVille;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_cle_iban", type="string", length=10, nullable=true)
     */
    private $prelevementCleIban;

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
     * @ORM\Column(name="prelevement_memo", type="text", length=65535, nullable=true)
     */
    private $prelevementMemo;

    /**
     * @var string
     *
     * @ORM\Column(name="email_factures", type="text", length=65535, nullable=true)
     */
    private $emailFactures;

    /**
     * @var string
     *
     * @ORM\Column(name="email_recus", type="text", length=65535, nullable=true)
     */
    private $emailRecus;

    /**
     * @var string
     *
     * @ORM\Column(name="email_depots", type="text", length=65535, nullable=true)
     */
    private $emailDepots;

    /**
     * @var integer
     *
     * @ORM\Column(name="titulaire_helios", type="integer", nullable=true)
     */
    private $titulaireHelios;

    /**
     * @var string
     *
     * @ORM\Column(name="code_comptable", type="text", length=65535, nullable=true)
     */
    private $codeComptable;

    /**
     * @var string
     *
     * @ORM\Column(name="idtiers_helios", type="text", length=65535, nullable=true)
     */
    private $idtiersHelios;

    /**
     * @var integer
     *
     * @ORM\Column(name="natidtiers_helios", type="integer", nullable=true)
     */
    private $natidtiersHelios;

    /**
     * @var string
     *
     * @ORM\Column(name="reftiers_helios", type="text", length=65535, nullable=true)
     */
    private $reftiersHelios;

    /**
     * @var integer
     *
     * @ORM\Column(name="cattiers_helios", type="integer", nullable=true)
     */
    private $cattiersHelios;

    /**
     * @var integer
     *
     * @ORM\Column(name="natjur_helios", type="integer", nullable=true)
     */
    private $natjurHelios;

    /**
     * @var integer
     *
     * @ORM\Column(name="autorisation_cafpro", type="integer", nullable=true)
     */
    private $autorisationCafpro;


}

