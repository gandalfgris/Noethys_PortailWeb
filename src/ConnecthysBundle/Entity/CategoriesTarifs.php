<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoriesTarifs
 *
 * @ORM\Table(name="categories_tarifs", indexes={@ORM\Index(name="IDactivite", columns={"IDactivite"})})
 * @ORM\Entity
 */
class CategoriesTarifs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDcategorie_tarif", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcategorieTarif;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=200, nullable=true)
     */
    private $nom;

    /**
     * @var \Activites
     *
     * @ORM\ManyToOne(targetEntity="Activites")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDactivite", referencedColumnName="IDactivite")
     * })
     */
    private $idactivite;



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
     * @return CategoriesTarifs
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
     * Set idactivite
     *
     * @param \ConnecthysBundle\Entity\Activites $idactivite
     *
     * @return CategoriesTarifs
     */
    public function setIdactivite(\ConnecthysBundle\Entity\Activites $idactivite = null)
    {
        $this->idactivite = $idactivite;

        return $this;
    }

    /**
     * Get idactivite
     *
     * @return \ConnecthysBundle\Entity\Activites
     */
    public function getIdactivite()
    {
        return $this->idactivite;
    }
}
