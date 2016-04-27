<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TextesRappels
 *
 * @ORM\Table(name="textes_rappels")
 * @ORM\Entity
 */
class TextesRappels
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDtexte", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtexte;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=true)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="couleur", type="string", length=50, nullable=true)
     */
    private $couleur;

    /**
     * @var integer
     *
     * @ORM\Column(name="retard_min", type="integer", nullable=true)
     */
    private $retardMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="retard_max", type="integer", nullable=true)
     */
    private $retardMax;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=true)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="texte_xml", type="text", length=65535, nullable=true)
     */
    private $texteXml;

    /**
     * @var string
     *
     * @ORM\Column(name="texte_pdf", type="text", length=65535, nullable=true)
     */
    private $textePdf;


}

