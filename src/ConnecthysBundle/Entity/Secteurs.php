<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Secteurs
 *
 * @ORM\Table(name="secteurs")
 * @ORM\Entity
 */
class Secteurs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDsecteur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsecteur;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;



    /**
     * Get idsecteur
     *
     * @return integer
     */
    public function getIdsecteur()
    {
        return $this->idsecteur;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Secteurs
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }
}
