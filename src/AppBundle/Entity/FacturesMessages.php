<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FacturesMessages
 *
 * @ORM\Table(name="factures_messages")
 * @ORM\Entity
 */
class FacturesMessages
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDmessage", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmessage;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=true)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="text", length=65535, nullable=true)
     */
    private $texte;


}

