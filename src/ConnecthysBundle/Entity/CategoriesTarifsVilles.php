<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoriesTarifsVilles
 *
 * @ORM\Table(name="categories_tarifs_villes", indexes={@ORM\Index(name="IDcategorie_tarif", columns={"IDcategorie_tarif"})})
 * @ORM\Entity
 */
class CategoriesTarifsVilles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDville", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idville;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=10, nullable=true)
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     */
    private $nom;

    /**
     * @var \CategoriesTarifs
     *
     * @ORM\ManyToOne(targetEntity="CategoriesTarifs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDcategorie_tarif", referencedColumnName="IDcategorie_tarif")
     * })
     */
    private $idcategorieTarif;



    /**
     * Get idville
     *
     * @return integer
     */
    public function getIdville()
    {
        return $this->idville;
    }

    /**
     * Set cp
     *
     * @param string $cp
     *
     * @return CategoriesTarifsVilles
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return string
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return CategoriesTarifsVilles
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
     * Set idcategorieTarif
     *
     * @param \ConnecthysBundle\Entity\CategoriesTarifs $idcategorieTarif
     *
     * @return CategoriesTarifsVilles
     */
    public function setIdcategorieTarif(\ConnecthysBundle\Entity\CategoriesTarifs $idcategorieTarif = null)
    {
        $this->idcategorieTarif = $idcategorieTarif;

        return $this;
    }

    /**
     * Get idcategorieTarif
     *
     * @return \ConnecthysBundle\Entity\CategoriesTarifs
     */
    public function getIdcategorieTarif()
    {
        return $this->idcategorieTarif;
    }
}
