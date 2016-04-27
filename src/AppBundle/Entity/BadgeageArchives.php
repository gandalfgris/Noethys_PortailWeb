<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BadgeageArchives
 *
 * @ORM\Table(name="badgeage_archives")
 * @ORM\Entity
 */
class BadgeageArchives
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDarchive", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idarchive;

    /**
     * @var string
     *
     * @ORM\Column(name="date_archivage", type="string", length=10, nullable=true)
     */
    private $dateArchivage;

    /**
     * @var string
     *
     * @ORM\Column(name="codebarres", type="string", length=200, nullable=true)
     */
    private $codebarres;

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


}

