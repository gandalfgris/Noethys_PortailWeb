<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Consommations
 *
 * @ORM\Table(name="consommations", indexes={@ORM\Index(name="index_consommations_IDactivite", columns={"IDactivite"}), @ORM\Index(name="index_consommations_IDindividu", columns={"IDindividu"}), @ORM\Index(name="index_consommations_date", columns={"date"}), @ORM\Index(name="index_consommations_IDcompte_payeur", columns={"IDcompte_payeur"})})
 * @ORM\Entity
 */
class Consommations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDconso", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idconso;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDindividu", type="integer", nullable=true)
     */
    private $idindividu;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDinscription", type="integer", nullable=true)
     */
    private $idinscription;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDactivite", type="integer", nullable=true)
     */
    private $idactivite;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=10, nullable=true)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDunite", type="integer", nullable=true)
     */
    private $idunite;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDgroupe", type="integer", nullable=true)
     */
    private $idgroupe;

    /**
     * @var string
     *
     * @ORM\Column(name="heure_debut", type="string", length=10, nullable=true)
     */
    private $heureDebut;

    /**
     * @var string
     *
     * @ORM\Column(name="heure_fin", type="string", length=10, nullable=true)
     */
    private $heureFin;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=20, nullable=true)
     */
    private $etat;

    /**
     * @var integer
     *
     * @ORM\Column(name="verrouillage", type="integer", nullable=true)
     */
    private $verrouillage;

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
     * @ORM\Column(name="IDcategorie_tarif", type="integer", nullable=true)
     */
    private $idcategorieTarif;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcompte_payeur", type="integer", nullable=true)
     */
    private $idcomptePayeur;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDprestation", type="integer", nullable=true)
     */
    private $idprestation;

    /**
     * @var integer
     *
     * @ORM\Column(name="forfait", type="integer", nullable=true)
     */
    private $forfait;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer", nullable=true)
     */
    private $quantite;

    /**
     * @var string
     *
     * @ORM\Column(name="etiquettes", type="string", length=50, nullable=true)
     */
    private $etiquettes;


}

