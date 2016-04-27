<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoriesTarifs
 *
 * @ORM\Table(name="categories_tarifs")
 * @ORM\Entity
 */
class CategoriesTarifs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDcategorie_tarif", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcategorieTarif;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDactivite", type="integer", nullable=true)
     */
    private $idactivite;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=200, nullable=true)
     */
    private $nom;


}

