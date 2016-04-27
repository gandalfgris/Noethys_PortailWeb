<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrats
 *
 * @ORM\Table(name="contrats")
 * @ORM\Entity
 */
class Contrats
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDcontrat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcontrat;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDindividu", type="integer", nullable=true)
     */
    private $idindividu;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDinscription", type="integer", nullable=true)
     */
    private $idinscription;

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
     * @var string
     *
     * @ORM\Column(name="observations", type="text", length=65535, nullable=true)
     */
    private $observations;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDtarif", type="integer", nullable=true)
     */
    private $idtarif;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDactivite", type="integer", nullable=true)
     */
    private $idactivite;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=100, nullable=true)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_absences_prevues", type="integer", nullable=true)
     */
    private $nbreAbsencesPrevues;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_heures_regularisation", type="integer", nullable=true)
     */
    private $nbreHeuresRegularisation;

    /**
     * @var string
     *
     * @ORM\Column(name="duree_absences_prevues", type="string", length=50, nullable=true)
     */
    private $dureeAbsencesPrevues;

    /**
     * @var string
     *
     * @ORM\Column(name="duree_heures_regularisation", type="string", length=50, nullable=true)
     */
    private $dureeHeuresRegularisation;

    /**
     * @var string
     *
     * @ORM\Column(name="duree_tolerance_depassement", type="string", length=50, nullable=true)
     */
    private $dureeToleranceDepassement;


}

