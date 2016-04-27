<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NomadeArchivage
 *
 * @ORM\Table(name="nomade_archivage")
 * @ORM\Entity
 */
class NomadeArchivage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDarchive", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idarchive;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_fichier", type="text", length=65535, nullable=true)
     */
    private $nomFichier;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_appareil", type="string", length=100, nullable=true)
     */
    private $idAppareil;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=10, nullable=true)
     */
    private $date;


}

