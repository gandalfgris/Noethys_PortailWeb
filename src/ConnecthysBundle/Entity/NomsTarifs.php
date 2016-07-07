<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NomsTarifs
 *
 * @ORM\Table(name="noms_tarifs", indexes={@ORM\Index(name="IDactivite", columns={"IDactivite"}), @ORM\Index(name="IDcategorie_tarif", columns={"IDcategorie_tarif"})})
 * @ORM\Entity
 */
class NomsTarifs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDnom_tarif", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idnomTarif;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDactivite", type="integer", nullable=true)
     */
    private $idactivite;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcategorie_tarif", type="integer", nullable=true)
     */
    private $idcategorieTarif;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=200, nullable=true)
     */
    private $nom;



    /**
     * Get idnomTarif
     *
     * @return integer
     */
    public function getIdnomTarif()
    {
        return $this->idnomTarif;
    }

    /**
     * Set idactivite
     *
     * @param integer $idactivite
     *
     * @return NomsTarifs
     */
    public function setIdactivite($idactivite)
    {
        $this->idactivite = $idactivite;

        return $this;
    }

    /**
     * Get idactivite
     *
     * @return integer
     */
    public function getIdactivite()
    {
        return $this->idactivite;
    }

    /**
     * Set idcategorieTarif
     *
     * @param integer $idcategorieTarif
     *
     * @return NomsTarifs
     */
    public function setIdcategorieTarif($idcategorieTarif)
    {
        $this->idcategorieTarif = $idcategorieTarif;

        return $this;
    }

    /**
     * Get idcategorieTarif
     *
     * @return integer
     */
    public function getIdcategorieTarif()
    {
        return $this->idcategorieTarif;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return NomsTarifs
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
