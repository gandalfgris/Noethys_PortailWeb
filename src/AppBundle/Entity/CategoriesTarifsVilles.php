<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoriesTarifsVilles
 *
 * @ORM\Table(name="categories_tarifs_villes")
 * @ORM\Entity
 */
class CategoriesTarifsVilles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDville", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idville;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcategorie_tarif", type="integer", nullable=true)
     */
    private $idcategorieTarif;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=10, nullable=true)
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     */
    private $nom;


}

