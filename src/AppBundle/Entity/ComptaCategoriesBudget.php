<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComptaCategoriesBudget
 *
 * @ORM\Table(name="compta_categories_budget")
 * @ORM\Entity
 */
class ComptaCategoriesBudget
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDcategorie_budget", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcategorieBudget;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDbudget", type="integer", nullable=true)
     */
    private $idbudget;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=200, nullable=true)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcategorie", type="integer", nullable=true)
     */
    private $idcategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="valeur", type="text", length=65535, nullable=true)
     */
    private $valeur;


}

