<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Consommations
 *
 * @ORM\Table(name="consommations", indexes={@ORM\Index(name="index_consommations_IDactivite", columns={"IDactivite"}), @ORM\Index(name="index_consommations_IDindividu", columns={"IDindividu"}), @ORM\Index(name="index_consommations_date", columns={"date"}), @ORM\Index(name="index_consommations_IDcompte_payeur", columns={"IDcompte_payeur"}), @ORM\Index(name="IDinscription", columns={"IDinscription"}), @ORM\Index(name="IDunite", columns={"IDunite"}), @ORM\Index(name="IDgroupe", columns={"IDgroupe"}), @ORM\Index(name="IDcategorie_tarif", columns={"IDcategorie_tarif"}), @ORM\Index(name="IDprestation", columns={"IDprestation"})})
 * @ORM\Entity
 */
class Consommations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDconso", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idconso;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=10, nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="heure_debut", type="string", length=10, nullable=true)
     */
    private $heureDebut;

    /**
     * @var string
     *
     * @ORM\Column(name="heure_fin", type="string", length=10, nullable=true)
     */
    private $heureFin;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=20, nullable=true)
     */
    private $etat;

    /**
     * @var integer
     *
     * @ORM\Column(name="verrouillage", type="integer", nullable=true)
     */
    private $verrouillage;

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
     * @var integer
     *
     * @ORM\Column(name="forfait", type="integer", nullable=true)
     */
    private $forfait;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer", nullable=true)
     */
    private $quantite;

    /**
     * @var string
     *
     * @ORM\Column(name="etiquettes", type="string", length=50, nullable=true)
     */
    private $etiquettes;

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
     * @var \Inscriptions
     *
     * @ORM\ManyToOne(targetEntity="Inscriptions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDinscription", referencedColumnName="IDinscription")
     * })
     */
    private $idinscription;

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
     * @var \Unites
     *
     * @ORM\ManyToOne(targetEntity="Unites")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDunite", referencedColumnName="IDunite")
     * })
     */
    private $idunite;

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
     * @var \ComptesPayeurs
     *
     * @ORM\ManyToOne(targetEntity="ComptesPayeurs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDcompte_payeur", referencedColumnName="IDcompte_payeur")
     * })
     */
    private $idcomptePayeur;

    /**
     * @var \Prestations
     *
     * @ORM\ManyToOne(targetEntity="Prestations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDprestation", referencedColumnName="IDprestation")
     * })
     */
    private $idprestation;



    /**
     * Get idconso
     *
     * @return integer
     */
    public function getIdconso()
    {
        return $this->idconso;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return Consommations
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set heureDebut
     *
     * @param string $heureDebut
     *
     * @return Consommations
     */
    public function setHeureDebut($heureDebut)
    {
        $this->heureDebut = $heureDebut;

        return $this;
    }

    /**
     * Get heureDebut
     *
     * @return string
     */
    public function getHeureDebut()
    {
        return $this->heureDebut;
    }

    /**
     * Set heureFin
     *
     * @param string $heureFin
     *
     * @return Consommations
     */
    public function setHeureFin($heureFin)
    {
        $this->heureFin = $heureFin;

        return $this;
    }

    /**
     * Get heureFin
     *
     * @return string
     */
    public function getHeureFin()
    {
        return $this->heureFin;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Consommations
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set verrouillage
     *
     * @param integer $verrouillage
     *
     * @return Consommations
     */
    public function setVerrouillage($verrouillage)
    {
        $this->verrouillage = $verrouillage;

        return $this;
    }

    /**
     * Get verrouillage
     *
     * @return integer
     */
    public function getVerrouillage()
    {
        return $this->verrouillage;
    }

    /**
     * Set dateSaisie
     *
     * @param string $dateSaisie
     *
     * @return Consommations
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
     * @return Consommations
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
     * Set forfait
     *
     * @param integer $forfait
     *
     * @return Consommations
     */
    public function setForfait($forfait)
    {
        $this->forfait = $forfait;

        return $this;
    }

    /**
     * Get forfait
     *
     * @return integer
     */
    public function getForfait()
    {
        return $this->forfait;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return Consommations
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set etiquettes
     *
     * @param string $etiquettes
     *
     * @return Consommations
     */
    public function setEtiquettes($etiquettes)
    {
        $this->etiquettes = $etiquettes;

        return $this;
    }

    /**
     * Get etiquettes
     *
     * @return string
     */
    public function getEtiquettes()
    {
        return $this->etiquettes;
    }

    /**
     * Set idindividu
     *
     * @param \ConnecthysBundle\Entity\Individus $idindividu
     *
     * @return Consommations
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
     * Set idinscription
     *
     * @param \ConnecthysBundle\Entity\Inscriptions $idinscription
     *
     * @return Consommations
     */
    public function setIdinscription(\ConnecthysBundle\Entity\Inscriptions $idinscription = null)
    {
        $this->idinscription = $idinscription;

        return $this;
    }

    /**
     * Get idinscription
     *
     * @return \ConnecthysBundle\Entity\Inscriptions
     */
    public function getIdinscription()
    {
        return $this->idinscription;
    }

    /**
     * Set idactivite
     *
     * @param \ConnecthysBundle\Entity\Activites $idactivite
     *
     * @return Consommations
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
     * Set idunite
     *
     * @param \ConnecthysBundle\Entity\Unites $idunite
     *
     * @return Consommations
     */
    public function setIdunite(\ConnecthysBundle\Entity\Unites $idunite = null)
    {
        $this->idunite = $idunite;

        return $this;
    }

    /**
     * Get idunite
     *
     * @return \ConnecthysBundle\Entity\Unites
     */
    public function getIdunite()
    {
        return $this->idunite;
    }

    /**
     * Set idgroupe
     *
     * @param \ConnecthysBundle\Entity\Groupes $idgroupe
     *
     * @return Consommations
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
     * @return Consommations
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

    /**
     * Set idcomptePayeur
     *
     * @param \ConnecthysBundle\Entity\ComptesPayeurs $idcomptePayeur
     *
     * @return Consommations
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
     * Set idprestation
     *
     * @param \ConnecthysBundle\Entity\Prestations $idprestation
     *
     * @return Consommations
     */
    public function setIdprestation(\ConnecthysBundle\Entity\Prestations $idprestation = null)
    {
        $this->idprestation = $idprestation;

        return $this;
    }

    /**
     * Get idprestation
     *
     * @return \ConnecthysBundle\Entity\Prestations
     */
    public function getIdprestation()
    {
        return $this->idprestation;
    }
}
