<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoriesTravail
 *
 * @ORM\Table(name="categories_travail")
 * @ORM\Entity
 */
class CategoriesTravail
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
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     */
    private $nom;


}

