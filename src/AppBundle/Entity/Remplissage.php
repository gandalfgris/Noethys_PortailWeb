<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Remplissage
 *
 * @ORM\Table(name="remplissage", indexes={@ORM\Index(name="index_remplissage_IDactivite", columns={"IDactivite"}), @ORM\Index(name="index_remplissage_date", columns={"date"})})
 * @ORM\Entity
 */
class Remplissage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDremplissage", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idremplissage;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDactivite", type="integer", nullable=true)
     */
    private $idactivite;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDunite_remplissage", type="integer", nullable=true)
     */
    private $iduniteRemplissage;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDgroupe", type="integer", nullable=true)
     */
    private $idgroupe;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=10, nullable=true)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="places", type="integer", nullable=true)
     */
    private $places;


}

