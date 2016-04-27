<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupesActivites
 *
 * @ORM\Table(name="groupes_activites")
 * @ORM\Entity
 */
class GroupesActivites
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDgroupe_activite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idgroupeActivite;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDtype_groupe_activite", type="integer", nullable=true)
     */
    private $idtypeGroupeActivite;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDactivite", type="integer", nullable=true)
     */
    private $idactivite;


}

