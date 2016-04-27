<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Droits
 *
 * @ORM\Table(name="droits")
 * @ORM\Entity
 */
class Droits
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDdroit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddroit;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDutilisateur", type="integer", nullable=true)
     */
    private $idutilisateur;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDmodele", type="integer", nullable=true)
     */
    private $idmodele;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=200, nullable=true)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=200, nullable=true)
     */
    private $action;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="text", length=65535, nullable=true)
     */
    private $etat;


}

