<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContratsTarifs
 *
 * @ORM\Table(name="contrats_tarifs")
 * @ORM\Entity
 */
class ContratsTarifs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDcontrat_tarif", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcontratTarif;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcontrat", type="integer", nullable=true)
     */
    private $idcontrat;

    /**
     * @var string
     *
     * @ORM\Column(name="date_debut", type="string", length=10, nullable=true)
     */
    private $dateDebut;

    /**
     * @var float
     *
     * @ORM\Column(name="revenu", type="float", precision=10, scale=0, nullable=true)
     */
    private $revenu;

    /**
     * @var integer
     *
     * @ORM\Column(name="quotient", type="integer", nullable=true)
     */
    private $quotient;

    /**
     * @var float
     *
     * @ORM\Column(name="taux", type="float", precision=10, scale=0, nullable=true)
     */
    private $taux;

    /**
     * @var float
     *
     * @ORM\Column(name="tarif_base", type="float", precision=10, scale=0, nullable=true)
     */
    private $tarifBase;

    /**
     * @var float
     *
     * @ORM\Column(name="tarif_depassement", type="float", precision=10, scale=0, nullable=true)
     */
    private $tarifDepassement;


}

