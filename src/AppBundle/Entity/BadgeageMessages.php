<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BadgeageMessages
 *
 * @ORM\Table(name="badgeage_messages")
 * @ORM\Entity
 */
class BadgeageMessages
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
     * @var integer
     *
     * @ORM\Column(name="IDprocedure", type="integer", nullable=true)
     */
    private $idprocedure;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDaction", type="integer", nullable=true)
     */
    private $idaction;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", length=65535, nullable=true)
     */
    private $message;


}

