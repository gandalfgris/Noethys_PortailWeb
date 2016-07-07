<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inscriptions
 *
 * @ORM\Table(name="inscriptions", indexes={@ORM\Index(name="index_inscriptions_IDfamille", columns={"IDfamille"}), @ORM\Index(name="index_inscriptions_IDindividu", columns={"IDindividu"}), @ORM\Index(name="IDactivite", columns={"IDactivite"}), @ORM\Index(name="IDgroupe", columns={"IDgroupe"}), @ORM\Index(name="IDcategorie_tarif", columns={"IDcategorie_tarif"}), @ORM\Index(name="IDcompte_payeur", columns={"IDcompte_payeur"})})
 * @ORM\Entity(repositoryClass="ConnecthysBundle\Repository\InscriptionsRepository")
 */
class Inscriptions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDinscription", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idinscription;

    /**
     * @var string
     *
     * @ORM\Column(name="date_inscription", type="string", length=10, nullable=true)
     */
    private $dateInscription;

    /**
     * @var integer
     *
     * @ORM\Column(name="parti", type="integer", nullable=true)
     */
    private $parti;

    /**
     * @var \ComptesPayeurs
     *
     * @ORM\ManyToOne(targetEntity="ComptesPayeurs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDcompte_payeur", referencedColumnName="IDcompte_payeur")
     * })
     */
    private $idcomptePayeur;

    /**
     * @var \Individus
     *
     * @ORM\ManyToOne(targetEntity="Individus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDindividu", referencedColumnName="IDindividu")
     * })
     */
    private $idindividu;

    /**
     * @var \Familles
     *
     * @ORM\ManyToOne(targetEntity="Familles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDfamille", referencedColumnName="IDfamille")
     * })
     */
    private $idfamille;

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
     * @var \Groupes
     *
     * @ORM\ManyToOne(targetEntity="Groupes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDgroupe", referencedColumnName="IDgroupe")
     * })
     */
    private $idgroupe;

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
     * Get idinscription
     *
     * @return integer
     */
    public function getIdinscription()
    {
        return $this->idinscription;
    }

    /**
     * Set dateInscription
     *
     * @param string $dateInscription
     *
     * @return Inscriptions
     */
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    /**
     * Get dateInscription
     *
     * @return string
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * Set parti
     *
     * @param integer $parti
     *
     * @return Inscriptions
     */
    public function setParti($parti)
    {
        $this->parti = $parti;

        return $this;
    }

    /**
     * Get parti
     *
     * @return integer
     */
    public function getParti()
    {
        return $this->parti;
    }

    /**
     * Set idcomptePayeur
     *
     * @param \ConnecthysBundle\Entity\ComptesPayeurs $idcomptePayeur
     *
     * @return Inscriptions
     */
    public function setIdcomptePayeur(\ConnecthysBundle\Entity\ComptesPayeurs $idcomptePayeur = null)
    {
        $this->idcomptePayeur = $idcomptePayeur;

        return $this;
    }

    /**
     * Get idcomptePayeur
     *
     * @return \ConnecthysBundle\Entity\ComptesPayeurs
     */
    public function getIdcomptePayeur()
    {
        return $this->idcomptePayeur;
    }

    /**
     * Set idindividu
     *
     * @param \ConnecthysBundle\Entity\Individus $idindividu
     *
     * @return Inscriptions
     */
    public function setIdindividu(\ConnecthysBundle\Entity\Individus $idindividu = null)
    {
        $this->idindividu = $idindividu;

        return $this;
    }

    /**
     * Get idindividu
     *
     * @return \ConnecthysBundle\Entity\Individus
     */
    public function getIdindividu()
    {
        return $this->idindividu;
    }

    /**
     * Set idfamille
     *
     * @param \ConnecthysBundle\Entity\Familles $idfamille
     *
     * @return Inscriptions
     */
    public function setIdfamille(\ConnecthysBundle\Entity\Familles $idfamille = null)
    {
        $this->idfamille = $idfamille;

        return $this;
    }

    /**
     * Get idfamille
     *
     * @return \ConnecthysBundle\Entity\Familles
     */
    public function getIdfamille()
    {
        return $this->idfamille;
    }

    /**
     * Set idactivite
     *
     * @param \ConnecthysBundle\Entity\Activites $idactivite
     *
     * @return Inscriptions
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

    /**
     * Set idgroupe
     *
     * @param \ConnecthysBundle\Entity\Groupes $idgroupe
     *
     * @return Inscriptions
     */
    public function setIdgroupe(\ConnecthysBundle\Entity\Groupes $idgroupe = null)
    {
        $this->idgroupe = $idgroupe;

        return $this;
    }

    /**
     * Get idgroupe
     *
     * @return \ConnecthysBundle\Entity\Groupes
     */
    public function getIdgroupe()
    {
        return $this->idgroupe;
    }

    /**
     * Set idcategorieTarif
     *
     * @param \ConnecthysBundle\Entity\CategoriesTarifs $idcategorieTarif
     *
     * @return Inscriptions
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