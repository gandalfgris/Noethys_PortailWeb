<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdressesMail
 *
 * @ORM\Table(name="adresses_mail")
 * @ORM\Entity
 */
class AdressesMail
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDadresse", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idadresse;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=200, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="motdepasse", type="string", length=200, nullable=true)
     */
    private $motdepasse;

    /**
     * @var string
     *
     * @ORM\Column(name="smtp", type="string", length=200, nullable=true)
     */
    private $smtp;

    /**
     * @var integer
     *
     * @ORM\Column(name="port", type="integer", nullable=true)
     */
    private $port;

    /**
     * @var integer
     *
     * @ORM\Column(name="connexionssl", type="integer", nullable=true)
     */
    private $connexionssl;

    /**
     * @var integer
     *
     * @ORM\Column(name="defaut", type="integer", nullable=true)
     */
    private $defaut;


}

