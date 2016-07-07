<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypesGroupesActivites
 *
 * @ORM\Table(name="types_groupes_activites")
 * @ORM\Entity
 */
class TypesGroupesActivites
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDtype_groupe_activite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypeGroupeActivite;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="observations", type="text", length=65535, nullable=true)
     */
    private $observations;



    /**
     * Get idtypeGroupeActivite
     *
     * @return integer
     */
    public function getIdtypeGroupeActivite()
    {
        return $this->idtypeGroupeActivite;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return TypesGroupesActivites
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

    /**
     * Set observations
     *
     * @param string $observations
     *
     * @return TypesGroupesActivites
     */
    public function setObservations($observations)
    {
        $this->observations = $observations;

        return $this;
    }

    /**
     * Get observations
     *
     * @return string
     */
    public function getObservations()
    {
        return $this->observations;
    }
}
