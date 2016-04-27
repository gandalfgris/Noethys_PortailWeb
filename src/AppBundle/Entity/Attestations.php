<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Attestations
 *
 * @ORM\Table(name="attestations")
 * @ORM\Entity
 */
class Attestations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDattestation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idattestation;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer", nullable=true)
     */
    private $numero;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDfamille", type="integer", nullable=true)
     */
    private $idfamille;

    /**
     * @var string
     *
     * @ORM\Column(name="date_edition", type="string", length=10, nullable=true)
     */
    private $dateEdition;

    /**
     * @var string
     *
     * @ORM\Column(name="activites", type="text", length=65535, nullable=true)
     */
    private $activites;

    /**
     * @var string
     *
     * @ORM\Column(name="individus", type="text", length=65535, nullable=true)
     */
    private $individus;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDutilisateur", type="integer", nullable=true)
     */
    private $idutilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="date_debut", type="string", length=10, nullable=true)
     */
    private $dateDebut;

    /**
     * @var string
     *
     * @ORM\Column(name="date_fin", type="string", length=10, nullable=true)
     */
    private $dateFin;

    /**
     * @var float
     *
     * @ORM\Column(name="total", type="float", precision=10, scale=0, nullable=true)
     */
    private $total;

    /**
     * @var float
     *
     * @ORM\Column(name="regle", type="float", precision=10, scale=0, nullable=true)
     */
    private $regle;

    /**
     * @var float
     *
     * @ORM\Column(name="solde", type="float", precision=10, scale=0, nullable=true)
     */
    private $solde;


}

