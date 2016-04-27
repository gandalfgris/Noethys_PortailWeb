<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rattachements
 *
 * @ORM\Table(name="rattachements", indexes={@ORM\Index(name="index_rattachements_IDfamille", columns={"IDfamille"})})
 * @ORM\Entity
 */
class Rattachements
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDrattachement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrattachement;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDindividu", type="integer", nullable=true)
     */
    private $idindividu;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDfamille", type="integer", nullable=true)
     */
    private $idfamille;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcategorie", type="integer", nullable=true)
     */
    private $idcategorie;

    /**
     * @var integer
     *
     * @ORM\Column(name="titulaire", type="integer", nullable=true)
     */
    private $titulaire;


}

