<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypesGroupesActivites
 *
 * @ORM\Table(name="types_groupes_activites")
 * @ORM\Entity
 */
class TypesGroupesActivites
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDtype_groupe_activite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypeGroupeActivite;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="observations", type="text", length=65535, nullable=true)
     */
    private $observations;


}

