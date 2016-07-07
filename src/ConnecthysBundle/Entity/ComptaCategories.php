<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComptaCategories
 *
 * @ORM\Table(name="compta_categories", indexes={@ORM\Index(name="IDcompte", columns={"IDcompte"})})
 * @ORM\Entity
 */
class ComptaCategories
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDcategorie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=200, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="abrege", type="string", length=200, nullable=true)
     */
    private $abrege;

    /**
     * @var string
     *
     * @ORM\Column(name="journal", type="string", length=200, nullable=true)
     */
    private $journal;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcompte", type="integer", nullable=true)
     */
    private $idcompte;



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
     * Set type
     *
     * @param string $type
     *
     * @return ComptaCategories
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
     * Set nom
     *
     * @param string $nom
     *
     * @return ComptaCategories
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
     * Set abrege
     *
     * @param string $abrege
     *
     * @return ComptaCategories
     */
    public function setAbrege($abrege)
    {
        $this->abrege = $abrege;

        return $this;
    }

    /**
     * Get abrege
     *
     * @return string
     */
    public function getAbrege()
    {
        return $this->abrege;
    }

    /**
     * Set journal
     *
     * @param string $journal
     *
     * @return ComptaCategories
     */
    public function setJournal($journal)
    {
        $this->journal = $journal;

        return $this;
    }

    /**
     * Get journal
     *
     * @return string
     */
    public function getJournal()
    {
        return $this->journal;
    }

    /**
     * Set idcompte
     *
     * @param integer $idcompte
     *
     * @return ComptaCategories
     */
    public function setIdcompte($idcompte)
    {
        $this->idcompte = $idcompte;

        return $this;
    }

    /**
     * Get idcompte
     *
     * @return integer
     */
    public function getIdcompte()
    {
        return $this->idcompte;
    }
}
