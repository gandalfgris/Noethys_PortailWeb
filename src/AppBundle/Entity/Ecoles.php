<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ecoles
 *
 * @ORM\Table(name="ecoles")
 * @ORM\Entity
 */
class Ecoles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDecole", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idecole;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="rue", type="string", length=200, nullable=true)
     */
    private $rue;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=10, nullable=true)
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=200, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=50, nullable=true)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=50, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=100, nullable=true)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="secteurs", type="string", length=200, nullable=true)
     */
    private $secteurs;


}

