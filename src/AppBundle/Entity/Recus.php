<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recus
 *
 * @ORM\Table(name="recus")
 * @ORM\Entity
 */
class Recus
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDrecu", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrecu;

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
     * @var integer
     *
     * @ORM\Column(name="IDutilisateur", type="integer", nullable=true)
     */
    private $idutilisateur;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDreglement", type="integer", nullable=true)
     */
    private $idreglement;


}

