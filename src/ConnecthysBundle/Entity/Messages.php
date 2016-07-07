<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Messages
 *
 * @ORM\Table(name="messages")
 * @ORM\Entity
 */
class Messages
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDmessage", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmessage;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=30, nullable=true)
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
     * @ORM\Column(name="date_saisie", type="string", length=10, nullable=true)
     */
    private $dateSaisie;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDutilisateur", type="integer", nullable=true)
     */
    private $idutilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="date_parution", type="string", length=10, nullable=true)
     */
    private $dateParution;

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
     * @var integer
     *
     * @ORM\Column(name="rappel", type="integer", nullable=true)
     */
    private $rappel;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDfamille", type="integer", nullable=true)
     */
    private $idfamille;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDindividu", type="integer", nullable=true)
     */
    private $idindividu;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="text", length=65535, nullable=true)
     */
    private $texte;

    /**
     * @var integer
     *
     * @ORM\Column(name="afficher_facture", type="integer", nullable=true)
     */
    private $afficherFacture;



    /**
     * Get idmessage
     *
     * @return integer
     */
    public function getIdmessage()
    {
        return $this->idmessage;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Messages
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
     * @return Messages
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
     * Set dateSaisie
     *
     * @param string $dateSaisie
     *
     * @return Messages
     */
    public function setDateSaisie($dateSaisie)
    {
        $this->dateSaisie = $dateSaisie;

        return $this;
    }

    /**
     * Get dateSaisie
     *
     * @return string
     */
    public function getDateSaisie()
    {
        return $this->dateSaisie;
    }

    /**
     * Set idutilisateur
     *
     * @param integer $idutilisateur
     *
     * @return Messages
     */
    public function setIdutilisateur($idutilisateur)
    {
        $this->idutilisateur = $idutilisateur;

        return $this;
    }

    /**
     * Get idutilisateur
     *
     * @return integer
     */
    public function getIdutilisateur()
    {
        return $this->idutilisateur;
    }

    /**
     * Set dateParution
     *
     * @param string $dateParution
     *
     * @return Messages
     */
    public function setDateParution($dateParution)
    {
        $this->dateParution = $dateParution;

        return $this;
    }

    /**
     * Get dateParution
     *
     * @return string
     */
    public function getDateParution()
    {
        return $this->dateParution;
    }

    /**
     * Set priorite
     *
     * @param string $priorite
     *
     * @return Messages
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
     * @return Messages
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
     * @return Messages
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

    /**
     * Set rappel
     *
     * @param integer $rappel
     *
     * @return Messages
     */
    public function setRappel($rappel)
    {
        $this->rappel = $rappel;

        return $this;
    }

    /**
     * Get rappel
     *
     * @return integer
     */
    public function getRappel()
    {
        return $this->rappel;
    }

    /**
     * Set idfamille
     *
     * @param integer $idfamille
     *
     * @return Messages
     */
    public function setIdfamille($idfamille)
    {
        $this->idfamille = $idfamille;

        return $this;
    }

    /**
     * Get idfamille
     *
     * @return integer
     */
    public function getIdfamille()
    {
        return $this->idfamille;
    }

    /**
     * Set idindividu
     *
     * @param integer $idindividu
     *
     * @return Messages
     */
    public function setIdindividu($idindividu)
    {
        $this->idindividu = $idindividu;

        return $this;
    }

    /**
     * Get idindividu
     *
     * @return integer
     */
    public function getIdindividu()
    {
        return $this->idindividu;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Messages
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
     * Set texte
     *
     * @param string $texte
     *
     * @return Messages
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set afficherFacture
     *
     * @param integer $afficherFacture
     *
     * @return Messages
     */
    public function setAfficherFacture($afficherFacture)
    {
        $this->afficherFacture = $afficherFacture;

        return $this;
    }

    /**
     * Get afficherFacture
     *
     * @return integer
     */
    public function getAfficherFacture()
    {
        return $this->afficherFacture;
    }
}
