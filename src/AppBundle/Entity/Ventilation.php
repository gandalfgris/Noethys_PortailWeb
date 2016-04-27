<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ventilation
 *
 * @ORM\Table(name="ventilation", indexes={@ORM\Index(name="index_ventilation_IDcompte_payeur", columns={"IDcompte_payeur"}), @ORM\Index(name="index_ventilation_IDprestation", columns={"IDprestation"})})
 * @ORM\Entity
 */
class Ventilation
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
     * @ORM\Column(name="IDcompte_payeur", type="integer", nullable=true)
     */
    private $idcomptePayeur;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDreglement", type="integer", nullable=true)
     */
    private $idreglement;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDprestation", type="integer", nullable=true)
     */
    private $idprestation;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", precision=10, scale=0, nullable=true)
     */
    private $montant;


}

