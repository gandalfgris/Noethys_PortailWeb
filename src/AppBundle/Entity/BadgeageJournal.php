<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BadgeageJournal
 *
 * @ORM\Table(name="badgeage_journal")
 * @ORM\Entity
 */
class BadgeageJournal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDaction", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idaction;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=10, nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="heure", type="string", length=50, nullable=true)
     */
    private $heure;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDindividu", type="integer", nullable=true)
     */
    private $idindividu;

    /**
     * @var string
     *
     * @ORM\Column(name="individu", type="text", length=65535, nullable=true)
     */
    private $individu;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="text", length=65535, nullable=true)
     */
    private $action;

    /**
     * @var string
     *
     * @ORM\Column(name="resultat", type="text", length=65535, nullable=true)
     */
    private $resultat;


}

