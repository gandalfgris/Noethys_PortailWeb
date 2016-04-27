<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VaccinsMaladies
 *
 * @ORM\Table(name="vaccins_maladies")
 * @ORM\Entity
 */
class VaccinsMaladies
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDvaccins_maladies", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idvaccinsMaladies;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDtype_vaccin", type="integer", nullable=true)
     */
    private $idtypeVaccin;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDtype_maladie", type="integer", nullable=true)
     */
    private $idtypeMaladie;


}

