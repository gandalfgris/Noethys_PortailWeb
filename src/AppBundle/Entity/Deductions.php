<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Deductions
 *
 * @ORM\Table(name="deductions")
 * @ORM\Entity
 */
class Deductions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDdeduction", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddeduction;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDprestation", type="integer", nullable=true)
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
     * @var float
     *
     * @ORM\Column(name="montant", type="float", precision=10, scale=0, nullable=true)
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=200, nullable=true)
     */
    private $label;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDaide", type="integer", nullable=true)
     */
    private $idaide;


}

