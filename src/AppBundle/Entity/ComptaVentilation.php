<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComptaVentilation
 *
 * @ORM\Table(name="compta_ventilation")
 * @ORM\Entity
 */
class ComptaVentilation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDventilation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idventilation;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDoperation", type="integer", nullable=true)
     */
    private $idoperation;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDexercice", type="integer", nullable=true)
     */
    private $idexercice;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcategorie", type="integer", nullable=true)
     */
    private $idcategorie;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDanalytique", type="integer", nullable=true)
     */
    private $idanalytique;

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
     * @ORM\Column(name="date_budget", type="string", length=10, nullable=true)
     */
    private $dateBudget;


}

