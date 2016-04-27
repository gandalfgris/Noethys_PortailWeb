<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NomsTarifs
 *
 * @ORM\Table(name="noms_tarifs")
 * @ORM\Entity
 */
class NomsTarifs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDnom_tarif", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idnomTarif;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDactivite", type="integer", nullable=true)
     */
    private $idactivite;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcategorie_tarif", type="integer", nullable=true)
     */
    private $idcategorieTarif;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=200, nullable=true)
     */
    private $nom;


}

