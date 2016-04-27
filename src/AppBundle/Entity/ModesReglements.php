<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModesReglements
 *
 * @ORM\Table(name="modes_reglements")
 * @ORM\Entity
 */
class ModesReglements
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDmode", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmode;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=100, nullable=true)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="blob", nullable=true)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_piece", type="string", length=10, nullable=true)
     */
    private $numeroPiece;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_chiffres", type="integer", nullable=true)
     */
    private $nbreChiffres;

    /**
     * @var string
     *
     * @ORM\Column(name="frais_gestion", type="string", length=10, nullable=true)
     */
    private $fraisGestion;

    /**
     * @var float
     *
     * @ORM\Column(name="frais_montant", type="float", precision=10, scale=0, nullable=true)
     */
    private $fraisMontant;

    /**
     * @var float
     *
     * @ORM\Column(name="frais_pourcentage", type="float", precision=10, scale=0, nullable=true)
     */
    private $fraisPourcentage;

    /**
     * @var string
     *
     * @ORM\Column(name="frais_arrondi", type="string", length=20, nullable=true)
     */
    private $fraisArrondi;

    /**
     * @var string
     *
     * @ORM\Column(name="frais_label", type="string", length=200, nullable=true)
     */
    private $fraisLabel;

    /**
     * @var string
     *
     * @ORM\Column(name="type_comptable", type="string", length=200, nullable=true)
     */
    private $typeComptable;

    /**
     * @var string
     *
     * @ORM\Column(name="code_compta", type="string", length=200, nullable=true)
     */
    private $codeCompta;


}

