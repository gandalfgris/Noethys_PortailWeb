<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComptaComptesComptables
 *
 * @ORM\Table(name="compta_comptes_comptables")
 * @ORM\Entity
 */
class ComptaComptesComptables
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDcompte", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcompte;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=200, nullable=true)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=true)
     */
    private $nom;


}

