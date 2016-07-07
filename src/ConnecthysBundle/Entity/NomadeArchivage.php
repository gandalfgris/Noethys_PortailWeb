<?php

namespace ConnecthysBundle\Entity;

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



    /**
     * Get idarchive
     *
     * @return integer
     */
    public function getIdarchive()
    {
        return $this->idarchive;
    }

    /**
     * Set nomFichier
     *
     * @param string $nomFichier
     *
     * @return NomadeArchivage
     */
    public function setNomFichier($nomFichier)
    {
        $this->nomFichier = $nomFichier;

        return $this;
    }

    /**
     * Get nomFichier
     *
     * @return string
     */
    public function getNomFichier()
    {
        return $this->nomFichier;
    }

    /**
     * Set idAppareil
     *
     * @param string $idAppareil
     *
     * @return NomadeArchivage
     */
    public function setIdAppareil($idAppareil)
    {
        $this->idAppareil = $idAppareil;

        return $this;
    }

    /**
     * Get idAppareil
     *
     * @return string
     */
    public function getIdAppareil()
    {
        return $this->idAppareil;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return NomadeArchivage
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }
}
