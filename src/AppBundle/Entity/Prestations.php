<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prestations
 *
 * @ORM\Table(name="prestations", indexes={@ORM\Index(name="index_prestations_IDfamille", columns={"IDfamille"}), @ORM\Index(name="index_prestations_date", columns={"date"}), @ORM\Index(name="index_prestations_IDcompte_payeur", columns={"IDcompte_payeur"}), @ORM\Index(name="index_prestations_IDactivite", columns={"IDactivite"})})
 * @ORM\Entity
 */
class Prestations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDprestation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprestation;

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
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=50, nullable=true)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=200, nullable=true)
     */
    private $label;

    /**
     * @var float
     *
     * @ORM\Column(name="montant_initial", type="float", precision=10, scale=0, nullable=true)
     */
    private $montantInitial;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", precision=10, scale=0, nullable=true)
     */
    private $montant;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDactivite", type="integer", nullable=true)
     */
    private $idactivite;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDtarif", type="integer", nullable=true)
     */
    private $idtarif;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDfacture", type="integer", nullable=true)
     */
    private $idfacture;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDfamille", type="integer", nullable=true)
     */
    private $idfamille;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDindividu", type="integer", nullable=true)
     */
    private $idindividu;

    /**
     * @var integer
     *
     * @ORM\Column(name="forfait", type="integer", nullable=true)
     */
    private $forfait;

    /**
     * @var string
     *
     * @ORM\Column(name="temps_facture", type="string", length=10, nullable=true)
     */
    private $tempsFacture;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcategorie_tarif", type="integer", nullable=true)
     */
    private $idcategorieTarif;

    /**
     * @var string
     *
     * @ORM\Column(name="forfait_date_debut", type="string", length=10, nullable=true)
     */
    private $forfaitDateDebut;

    /**
     * @var string
     *
     * @ORM\Column(name="forfait_date_fin", type="string", length=10, nullable=true)
     */
    private $forfaitDateFin;

    /**
     * @var integer
     *
     * @ORM\Column(name="reglement_frais", type="integer", nullable=true)
     */
    private $reglementFrais;

    /**
     * @var float
     *
     * @ORM\Column(name="tva", type="float", precision=10, scale=0, nullable=true)
     */
    private $tva;

    /**
     * @var string
     *
     * @ORM\Column(name="code_compta", type="string", length=200, nullable=true)
     */
    private $codeCompta;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcontrat", type="integer", nullable=true)
     */
    private $idcontrat;


}

