<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComptaBudgets
 *
 * @ORM\Table(name="compta_budgets")
 * @ORM\Entity
 */
class ComptaBudgets
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDbudget", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idbudget;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDexercice", type="integer", nullable=true)
     */
    private $idexercice;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="observations", type="string", length=200, nullable=true)
     */
    private $observations;

    /**
     * @var string
     *
     * @ORM\Column(name="analytiques", type="text", length=65535, nullable=true)
     */
    private $analytiques;

    /**
     * @var string
     *
     * @ORM\Column(name="date_debut", type="string", length=10, nullable=true)
     */
    private $dateDebut;

    /**
     * @var string
     *
     * @ORM\Column(name="date_fin", type="string", length=10, nullable=true)
     */
    private $dateFin;


}

