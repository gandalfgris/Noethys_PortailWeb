<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListesDiffusion
 *
 * @ORM\Table(name="listes_diffusion")
 * @ORM\Entity
 */
class ListesDiffusion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDliste", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idliste;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=200, nullable=true)
     */
    private $nom;



    /**
     * Get idliste
     *
     * @return integer
     */
    public function getIdliste()
    {
        return $this->idliste;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return ListesDiffusion
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
