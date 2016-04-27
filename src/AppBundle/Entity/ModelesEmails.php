<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModelesEmails
 *
 * @ORM\Table(name="modeles_emails")
 * @ORM\Entity
 */
class ModelesEmails
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDmodele", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmodele;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="text", length=65535, nullable=true)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="objet", type="text", length=65535, nullable=true)
     */
    private $objet;

    /**
     * @var string
     *
     * @ORM\Column(name="texte_xml", type="text", length=65535, nullable=true)
     */
    private $texteXml;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDadresse", type="integer", nullable=true)
     */
    private $idadresse;

    /**
     * @var integer
     *
     * @ORM\Column(name="defaut", type="integer", nullable=true)
     */
    private $defaut;


}

