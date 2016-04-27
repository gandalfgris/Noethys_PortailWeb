<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Individus
 *
 * @ORM\Table(name="individus")
 * @ORM\Entity
 */
class Individus
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDindividu", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idindividu;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcivilite", type="integer", nullable=true)
     */
    private $idcivilite;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_jfille", type="string", length=100, nullable=true)
     */
    private $nomJfille;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=100, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="num_secu", type="string", length=21, nullable=true)
     */
    private $numSecu;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDnationalite", type="integer", nullable=true)
     */
    private $idnationalite;

    /**
     * @var string
     *
     * @ORM\Column(name="date_naiss", type="string", length=10, nullable=true)
     */
    private $dateNaiss;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDpays_naiss", type="integer", nullable=true)
     */
    private $idpaysNaiss;

    /**
     * @var string
     *
     * @ORM\Column(name="cp_naiss", type="string", length=10, nullable=true)
     */
    private $cpNaiss;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_naiss", type="string", length=100, nullable=true)
     */
    private $villeNaiss;

    /**
     * @var integer
     *
     * @ORM\Column(name="deces", type="integer", nullable=true)
     */
    private $deces;

    /**
     * @var integer
     *
     * @ORM\Column(name="annee_deces", type="integer", nullable=true)
     */
    private $anneeDeces;

    /**
     * @var integer
     *
     * @ORM\Column(name="adresse_auto", type="integer", nullable=true)
     */
    private $adresseAuto;

    /**
     * @var string
     *
     * @ORM\Column(name="rue_resid", type="string", length=255, nullable=true)
     */
    private $rueResid;

    /**
     * @var string
     *
     * @ORM\Column(name="cp_resid", type="string", length=10, nullable=true)
     */
    private $cpResid;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_resid", type="string", length=100, nullable=true)
     */
    private $villeResid;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDsecteur", type="integer", nullable=true)
     */
    private $idsecteur;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcategorie_travail", type="integer", nullable=true)
     */
    private $idcategorieTravail;

    /**
     * @var string
     *
     * @ORM\Column(name="profession", type="string", length=100, nullable=true)
     */
    private $profession;

    /**
     * @var string
     *
     * @ORM\Column(name="employeur", type="string", length=100, nullable=true)
     */
    private $employeur;

    /**
     * @var string
     *
     * @ORM\Column(name="travail_tel", type="string", length=50, nullable=true)
     */
    private $travailTel;

    /**
     * @var string
     *
     * @ORM\Column(name="travail_fax", type="string", length=50, nullable=true)
     */
    private $travailFax;

    /**
     * @var string
     *
     * @ORM\Column(name="travail_mail", type="string", length=50, nullable=true)
     */
    private $travailMail;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_domicile", type="string", length=50, nullable=true)
     */
    private $telDomicile;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_mobile", type="string", length=50, nullable=true)
     */
    private $telMobile;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_fax", type="string", length=50, nullable=true)
     */
    private $telFax;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=50, nullable=true)
     */
    private $mail;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDmedecin", type="integer", nullable=true)
     */
    private $idmedecin;

    /**
     * @var string
     *
     * @ORM\Column(name="memo", type="text", length=65535, nullable=true)
     */
    private $memo;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDtype_sieste", type="integer", nullable=true)
     */
    private $idtypeSieste;

    /**
     * @var string
     *
     * @ORM\Column(name="date_creation", type="string", length=10, nullable=true)
     */
    private $dateCreation;


}

