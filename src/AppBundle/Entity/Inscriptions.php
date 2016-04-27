<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inscriptions
 *
 * @ORM\Table(name="inscriptions", indexes={@ORM\Index(name="index_inscriptions_IDfamille", columns={"IDfamille"}), @ORM\Index(name="index_inscriptions_IDindividu", columns={"IDindividu"})})
 * @ORM\Entity
 */
class Inscriptions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDinscription", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idinscription;

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
     * @ORM\Column(name="IDactivite", type="integer", nullable=true)
     */
    private $idactivite;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDgroupe", type="integer", nullable=true)
     */
    private $idgroupe;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcategorie_tarif", type="integer", nullable=true)
     */
    private $idcategorieTarif;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcompte_payeur", type="integer", nullable=true)
     */
    private $idcomptePayeur;

    /**
     * @var string
     *
     * @ORM\Column(name="date_inscription", type="string", length=10, nullable=true)
     */
    private $dateInscription;

    /**
     * @var integer
     *
     * @ORM\Column(name="parti", type="integer", nullable=true)
     */
    private $parti;


}

