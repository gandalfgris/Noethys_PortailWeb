<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypesMaladies
 *
 * @ORM\Table(name="types_maladies")
 * @ORM\Entity
 */
class TypesMaladies
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDtype_maladie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypeMaladie;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="vaccin_obligatoire", type="integer", nullable=true)
     */
    private $vaccinObligatoire;



    /**
     * Get idtypeMaladie
     *
     * @return integer
     */
    public function getIdtypeMaladie()
    {
        return $this->idtypeMaladie;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return TypesMaladies
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
     * Set vaccinObligatoire
     *
     * @param integer $vaccinObligatoire
     *
     * @return TypesMaladies
     */
    public function setVaccinObligatoire($vaccinObligatoire)
    {
        $this->vaccinObligatoire = $vaccinObligatoire;

        return $this;
    }

    /**
     * Get vaccinObligatoire
     *
     * @return integer
     */
    public function getVaccinObligatoire()
    {
        return $this->vaccinObligatoire;
    }
}
