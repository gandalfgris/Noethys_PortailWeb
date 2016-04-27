<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rappels
 *
 * @ORM\Table(name="rappels")
 * @ORM\Entity
 */
class Rappels
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDrappel", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrappel;

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
     * @ORM\Column(name="activites", type="text", length=65535, nullable=true)
     */
    private $activites;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDutilisateur", type="integer", nullable=true)
     */
    private $idutilisateur;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDtexte", type="integer", nullable=true)
     */
    private $idtexte;

    /**
     * @var string
     *
     * @ORM\Column(name="date_reference", type="string", length=10, nullable=true)
     */
    private $dateReference;

    /**
     * @var float
     *
     * @ORM\Column(name="solde", type="float", precision=10, scale=0, nullable=true)
     */
    private $solde;

    /**
     * @var string
     *
     * @ORM\Column(name="date_min", type="string", length=10, nullable=true)
     */
    private $dateMin;

    /**
     * @var string
     *
     * @ORM\Column(name="date_max", type="string", length=10, nullable=true)
     */
    private $dateMax;

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


}

