<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComptaCategories
 *
 * @ORM\Table(name="compta_categories")
 * @ORM\Entity
 */
class ComptaCategories
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDcategorie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=200, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="abrege", type="string", length=200, nullable=true)
     */
    private $abrege;

    /**
     * @var string
     *
     * @ORM\Column(name="journal", type="string", length=200, nullable=true)
     */
    private $journal;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcompte", type="integer", nullable=true)
     */
    private $idcompte;


}

