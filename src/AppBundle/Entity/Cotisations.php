<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cotisations
 *
 * @ORM\Table(name="cotisations")
 * @ORM\Entity
 */
class Cotisations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDcotisation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcotisation;

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

    /**
     * @var integer
     *
     * @ORM\Column(name="IDtype_cotisation", type="integer", nullable=true)
     */
    private $idtypeCotisation;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDunite_cotisation", type="integer", nullable=true)
     */
    private $iduniteCotisation;

    /**
     * @var string
     *
     * @ORM\Column(name="date_saisie", type="string", length=10, nullable=true)
     */
    private $dateSaisie;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDutilisateur", type="integer", nullable=true)
     */
    private $idutilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="date_creation_carte", type="string", length=10, nullable=true)
     */
    private $dateCreationCarte;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=50, nullable=true)
     */
    private $numero;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDdepot_cotisation", type="integer", nullable=true)
     */
    private $iddepotCotisation;

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
     * @var integer
     *
     * @ORM\Column(name="IDprestation", type="integer", nullable=true)
     */
    private $idprestation;

    /**
     * @var string
     *
     * @ORM\Column(name="observations", type="text", length=65535, nullable=true)
     */
    private $observations;

    /**
     * @var string
     *
     * @ORM\Column(name="activites", type="text", length=65535, nullable=true)
     */
    private $activites;


}

