<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComptaOperationsBudgetaires
 *
 * @ORM\Table(name="compta_operations_budgetaires")
 * @ORM\Entity
 */
class ComptaOperationsBudgetaires
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDoperation_budgetaire", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idoperationBudgetaire;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=200, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="date_budget", type="string", length=10, nullable=true)
     */
    private $dateBudget;

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


}

