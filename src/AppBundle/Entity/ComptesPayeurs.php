<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComptesPayeurs
 *
 * @ORM\Table(name="comptes_payeurs", indexes={@ORM\Index(name="index_comptes_payeurs_IDfamille", columns={"IDfamille"})})
 * @ORM\Entity
 */
class ComptesPayeurs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDcompte_payeur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcomptePayeur;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDfamille", type="integer", nullable=true)
     */
    private $idfamille;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDindividu", type="integer", nullable=true)
     */
    private $idindividu;


}

