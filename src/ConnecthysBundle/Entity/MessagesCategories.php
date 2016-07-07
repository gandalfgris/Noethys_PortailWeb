<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MessagesCategories
 *
 * @ORM\Table(name="messages_categories")
 * @ORM\Entity
 */
class MessagesCategories
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
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="priorite", type="string", length=30, nullable=true)
     */
    private $priorite;

    /**
     * @var integer
     *
     * @ORM\Column(name="afficher_accueil", type="integer", nullable=true)
     */
    private $afficherAccueil;

    /**
     * @var integer
     *
     * @ORM\Column(name="afficher_liste", type="integer", nullable=true)
     */
    private $afficherListe;



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
     * Set nom
     *
     * @param string $nom
     *
     * @return MessagesCategories
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
     * Set priorite
     *
     * @param string $priorite
     *
     * @return MessagesCategories
     */
    public function setPriorite($priorite)
    {
        $this->priorite = $priorite;

        return $this;
    }

    /**
     * Get priorite
     *
     * @return string
     */
    public function getPriorite()
    {
        return $this->priorite;
    }

    /**
     * Set afficherAccueil
     *
     * @param integer $afficherAccueil
     *
     * @return MessagesCategories
     */
    public function setAfficherAccueil($afficherAccueil)
    {
        $this->afficherAccueil = $afficherAccueil;

        return $this;
    }

    /**
     * Get afficherAccueil
     *
     * @return integer
     */
    public function getAfficherAccueil()
    {
        return $this->afficherAccueil;
    }

    /**
     * Set afficherListe
     *
     * @param integer $afficherListe
     *
     * @return MessagesCategories
     */
    public function setAfficherListe($afficherListe)
    {
        $this->afficherListe = $afficherListe;

        return $this;
    }

    /**
     * Get afficherListe
     *
     * @return integer
     */
    public function getAfficherListe()
    {
        return $this->afficherListe;
    }
}
