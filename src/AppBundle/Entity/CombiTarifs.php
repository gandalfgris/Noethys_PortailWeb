<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CombiTarifs
 *
 * @ORM\Table(name="combi_tarifs")
 * @ORM\Entity
 */
class CombiTarifs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDcombi_tarif", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcombiTarif;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDtarif", type="integer", nullable=true)
     */
    private $idtarif;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=10, nullable=true)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite_max", type="integer", nullable=true)
     */
    private $quantiteMax;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDgroupe", type="integer", nullable=true)
     */
    private $idgroupe;


}

