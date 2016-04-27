<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CombiTarifsUnites
 *
 * @ORM\Table(name="combi_tarifs_unites")
 * @ORM\Entity
 */
class CombiTarifsUnites
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDcombi_tarif_unite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcombiTarifUnite;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcombi_tarif", type="integer", nullable=true)
     */
    private $idcombiTarif;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDtarif", type="integer", nullable=true)
     */
    private $idtarif;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDunite", type="integer", nullable=true)
     */
    private $idunite;


}

