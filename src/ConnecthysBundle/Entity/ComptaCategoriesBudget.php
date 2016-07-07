<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComptaCategoriesBudget
 *
 * @ORM\Table(name="compta_categories_budget", indexes={@ORM\Index(name="IDbudget", columns={"IDbudget"}), @ORM\Index(name="IDcategorie", columns={"IDcategorie"})})
 * @ORM\Entity
 */
class ComptaCategoriesBudget
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDcategorie_budget", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcategorieBudget;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDbudget", type="integer", nullable=true)
     */
    private $idbudget;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=200, nullable=true)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcategorie", type="integer", nullable=true)
     */
    private $idcategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="valeur", type="text", length=65535, nullable=true)
     */
    private $valeur;



    /**
     * Get idcategorieBudget
     *
     * @return integer
     */
    public function getIdcategorieBudget()
    {
        return $this->idcategorieBudget;
    }

    /**
     * Set idbudget
     *
     * @param integer $idbudget
     *
     * @return ComptaCategoriesBudget
     */
    public function setIdbudget($idbudget)
    {
        $this->idbudget = $idbudget;

        return $this;
    }

    /**
     * Get idbudget
     *
     * @return integer
     */
    public function getIdbudget()
    {
        return $this->idbudget;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return ComptaCategoriesBudget
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set idcategorie
     *
     * @param integer $idcategorie
     *
     * @return ComptaCategoriesBudget
     */
    public function setIdcategorie($idcategorie)
    {
        $this->idcategorie = $idcategorie;

        return $this;
    }

    /**
     * Get idcategorie
     *
     * @return integer
     */
    public function getIdcategorie()
    {
        return $this->idcategorie;
    }

    /**
     * Set valeur
     *
     * @param string $valeur
     *
     * @return ComptaCategoriesBudget
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur
     *
     * @return string
     */
    public function getValeur()
    {
        return $this->valeur;
    }
}
