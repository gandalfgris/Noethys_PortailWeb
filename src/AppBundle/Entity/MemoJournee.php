<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MemoJournee
 *
 * @ORM\Table(name="memo_journee")
 * @ORM\Entity
 */
class MemoJournee
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDmemo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmemo;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDindividu", type="integer", nullable=true)
     */
    private $idindividu;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=10, nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="string", length=200, nullable=true)
     */
    private $texte;


}

