<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ouvertures
 *
 * @ORM\Table(name="ouvertures", indexes={@ORM\Index(name="index_ouvertures_date", columns={"date"}), @ORM\Index(name="index_ouvertures_IDactivite", columns={"IDactivite"})})
 * @ORM\Entity
 */
class Ouvertures
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDouverture", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idouverture;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDactivite", type="integer", nullable=true)
     */
    private $idactivite;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDunite", type="integer", nullable=true)
     */
    private $idunite;

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


}

