<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Liens
 *
 * @ORM\Table(name="liens", indexes={@ORM\Index(name="index_liens_IDfamille", columns={"IDfamille"})})
 * @ORM\Entity
 */
class Liens
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDlien", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlien;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDfamille", type="integer", nullable=true)
     */
    private $idfamille;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDindividu_sujet", type="integer", nullable=true)
     */
    private $idindividuSujet;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDtype_lien", type="integer", nullable=true)
     */
    private $idtypeLien;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDindividu_objet", type="integer", nullable=true)
     */
    private $idindividuObjet;

    /**
     * @var integer
     *
     * @ORM\Column(name="responsable", type="integer", nullable=true)
     */
    private $responsable;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDautorisation", type="integer", nullable=true)
     */
    private $idautorisation;


}

