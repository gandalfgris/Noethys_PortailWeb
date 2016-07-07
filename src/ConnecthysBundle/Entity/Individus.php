<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Individus
 *
 * @ORM\Table(name="individus", indexes={@ORM\Index(name="IDcivilite", columns={"IDcivilite"}), @ORM\Index(name="IDpays_naiss", columns={"IDpays_naiss"}), @ORM\Index(name="IDsecteur", columns={"IDsecteur"}), @ORM\Index(name="IDcategorie_travail", columns={"IDcategorie_travail"}), @ORM\Index(name="IDmedecin", columns={"IDmedecin"}), @ORM\Index(name="IDtype_sieste", columns={"IDtype_sieste"})})
 * @ORM\Entity
 */
class Individus
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDindividu", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idindividu;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcivilite", type="integer", nullable=true)
     */
    private $idcivilite;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_jfille", type="string", length=100, nullable=true)
     */
    private $nomJfille;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=100, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="num_secu", type="string", length=21, nullable=true)
     */
    private $numSecu;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDnationalite", type="integer", nullable=true)
     */
    private $idnationalite;

    /**
     * @var string
     *
     * @ORM\Column(name="date_naiss", type="string", length=10, nullable=true)
     */
    private $dateNaiss;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDpays_naiss", type="integer", nullable=true)
     */
    private $idpaysNaiss;

    /**
     * @var string
     *
     * @ORM\Column(name="cp_naiss", type="string", length=10, nullable=true)
     */
    private $cpNaiss;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_naiss", type="string", length=100, nullable=true)
     */
    private $villeNaiss;

    /**
     * @var integer
     *
     * @ORM\Column(name="deces", type="integer", nullable=true)
     */
    private $deces;

    /**
     * @var integer
     *
     * @ORM\Column(name="annee_deces", type="integer", nullable=true)
     */
    private $anneeDeces;

    /**
     * @var integer
     *
     * @ORM\Column(name="adresse_auto", type="integer", nullable=true)
     */
    private $adresseAuto;

    /**
     * @var string
     *
     * @ORM\Column(name="rue_resid", type="string", length=255, nullable=true)
     */
    private $rueResid;

    /**
     * @var string
     *
     * @ORM\Column(name="cp_resid", type="string", length=10, nullable=true)
     */
    private $cpResid;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_resid", type="string", length=100, nullable=true)
     */
    private $villeResid;

    /**
     * @var string
     *
     * @ORM\Column(name="profession", type="string", length=100, nullable=true)
     */
    private $profession;

    /**
     * @var string
     *
     * @ORM\Column(name="employeur", type="string", length=100, nullable=true)
     */
    private $employeur;

    /**
     * @var string
     *
     * @ORM\Column(name="travail_tel", type="string", length=50, nullable=true)
     */
    private $travailTel;

    /**
     * @var string
     *
     * @ORM\Column(name="travail_fax", type="string", length=50, nullable=true)
     */
    private $travailFax;

    /**
     * @var string
     *
     * @ORM\Column(name="travail_mail", type="string", length=50, nullable=true)
     */
    private $travailMail;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_domicile", type="string", length=50, nullable=true)
     */
    private $telDomicile;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_mobile", type="string", length=50, nullable=true)
     */
    private $telMobile;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_fax", type="string", length=50, nullable=true)
     */
    private $telFax;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=50, nullable=true)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="memo", type="text", length=65535, nullable=true)
     */
    private $memo;

    /**
     * @var string
     *
     * @ORM\Column(name="date_creation", type="string", length=10, nullable=true)
     */
    private $dateCreation;

    /**
     * @var \Secteurs
     *
     * @ORM\ManyToOne(targetEntity="Secteurs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDsecteur", referencedColumnName="IDsecteur")
     * })
     */
    private $idsecteur;

    /**
     * @var \CategoriesTravail
     *
     * @ORM\ManyToOne(targetEntity="CategoriesTravail")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDcategorie_travail", referencedColumnName="IDcategorie")
     * })
     */
    private $idcategorieTravail;

    /**
     * @var \Medecins
     *
     * @ORM\ManyToOne(targetEntity="Medecins")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDmedecin", referencedColumnName="IDmedecin")
     * })
     */
    private $idmedecin;

    /**
     * @var \TypesSieste
     *
     * @ORM\ManyToOne(targetEntity="TypesSieste")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDtype_sieste", referencedColumnName="IDtype_sieste")
     * })
     */
    private $idtypeSieste;



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
     * Set idcivilite
     *
     * @param integer $idcivilite
     *
     * @return Individus
     */
    public function setIdcivilite($idcivilite)
    {
        $this->idcivilite = $idcivilite;

        return $this;
    }

    /**
     * Get idcivilite
     *
     * @return integer
     */
    public function getIdcivilite()
    {
        return $this->idcivilite;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Individus
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
     * Set nomJfille
     *
     * @param string $nomJfille
     *
     * @return Individus
     */
    public function setNomJfille($nomJfille)
    {
        $this->nomJfille = $nomJfille;

        return $this;
    }

    /**
     * Get nomJfille
     *
     * @return string
     */
    public function getNomJfille()
    {
        return $this->nomJfille;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Individus
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set numSecu
     *
     * @param string $numSecu
     *
     * @return Individus
     */
    public function setNumSecu($numSecu)
    {
        $this->numSecu = $numSecu;

        return $this;
    }

    /**
     * Get numSecu
     *
     * @return string
     */
    public function getNumSecu()
    {
        return $this->numSecu;
    }

    /**
     * Set idnationalite
     *
     * @param integer $idnationalite
     *
     * @return Individus
     */
    public function setIdnationalite($idnationalite)
    {
        $this->idnationalite = $idnationalite;

        return $this;
    }

    /**
     * Get idnationalite
     *
     * @return integer
     */
    public function getIdnationalite()
    {
        return $this->idnationalite;
    }

    /**
     * Set dateNaiss
     *
     * @param string $dateNaiss
     *
     * @return Individus
     */
    public function setDateNaiss($dateNaiss)
    {
        $this->dateNaiss = $dateNaiss;

        return $this;
    }

    /**
     * Get dateNaiss
     *
     * @return string
     */
    public function getDateNaiss()
    {
        return $this->dateNaiss;
    }

    /**
     * Set idpaysNaiss
     *
     * @param integer $idpaysNaiss
     *
     * @return Individus
     */
    public function setIdpaysNaiss($idpaysNaiss)
    {
        $this->idpaysNaiss = $idpaysNaiss;

        return $this;
    }

    /**
     * Get idpaysNaiss
     *
     * @return integer
     */
    public function getIdpaysNaiss()
    {
        return $this->idpaysNaiss;
    }

    /**
     * Set cpNaiss
     *
     * @param string $cpNaiss
     *
     * @return Individus
     */
    public function setCpNaiss($cpNaiss)
    {
        $this->cpNaiss = $cpNaiss;

        return $this;
    }

    /**
     * Get cpNaiss
     *
     * @return string
     */
    public function getCpNaiss()
    {
        return $this->cpNaiss;
    }

    /**
     * Set villeNaiss
     *
     * @param string $villeNaiss
     *
     * @return Individus
     */
    public function setVilleNaiss($villeNaiss)
    {
        $this->villeNaiss = $villeNaiss;

        return $this;
    }

    /**
     * Get villeNaiss
     *
     * @return string
     */
    public function getVilleNaiss()
    {
        return $this->villeNaiss;
    }

    /**
     * Set deces
     *
     * @param integer $deces
     *
     * @return Individus
     */
    public function setDeces($deces)
    {
        $this->deces = $deces;

        return $this;
    }

    /**
     * Get deces
     *
     * @return integer
     */
    public function getDeces()
    {
        return $this->deces;
    }

    /**
     * Set anneeDeces
     *
     * @param integer $anneeDeces
     *
     * @return Individus
     */
    public function setAnneeDeces($anneeDeces)
    {
        $this->anneeDeces = $anneeDeces;

        return $this;
    }

    /**
     * Get anneeDeces
     *
     * @return integer
     */
    public function getAnneeDeces()
    {
        return $this->anneeDeces;
    }

    /**
     * Set adresseAuto
     *
     * @param integer $adresseAuto
     *
     * @return Individus
     */
    public function setAdresseAuto($adresseAuto)
    {
        $this->adresseAuto = $adresseAuto;

        return $this;
    }

    /**
     * Get adresseAuto
     *
     * @return integer
     */
    public function getAdresseAuto()
    {
        return $this->adresseAuto;
    }

    /**
     * Set rueResid
     *
     * @param string $rueResid
     *
     * @return Individus
     */
    public function setRueResid($rueResid)
    {
        $this->rueResid = $rueResid;

        return $this;
    }

    /**
     * Get rueResid
     *
     * @return string
     */
    public function getRueResid()
    {
        return $this->rueResid;
    }

    /**
     * Set cpResid
     *
     * @param string $cpResid
     *
     * @return Individus
     */
    public function setCpResid($cpResid)
    {
        $this->cpResid = $cpResid;

        return $this;
    }

    /**
     * Get cpResid
     *
     * @return string
     */
    public function getCpResid()
    {
        return $this->cpResid;
    }

    /**
     * Set villeResid
     *
     * @param string $villeResid
     *
     * @return Individus
     */
    public function setVilleResid($villeResid)
    {
        $this->villeResid = $villeResid;

        return $this;
    }

    /**
     * Get villeResid
     *
     * @return string
     */
    public function getVilleResid()
    {
        return $this->villeResid;
    }

    /**
     * Set profession
     *
     * @param string $profession
     *
     * @return Individus
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;

        return $this;
    }

    /**
     * Get profession
     *
     * @return string
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * Set employeur
     *
     * @param string $employeur
     *
     * @return Individus
     */
    public function setEmployeur($employeur)
    {
        $this->employeur = $employeur;

        return $this;
    }

    /**
     * Get employeur
     *
     * @return string
     */
    public function getEmployeur()
    {
        return $this->employeur;
    }

    /**
     * Set travailTel
     *
     * @param string $travailTel
     *
     * @return Individus
     */
    public function setTravailTel($travailTel)
    {
        $this->travailTel = $travailTel;

        return $this;
    }

    /**
     * Get travailTel
     *
     * @return string
     */
    public function getTravailTel()
    {
        return $this->travailTel;
    }

    /**
     * Set travailFax
     *
     * @param string $travailFax
     *
     * @return Individus
     */
    public function setTravailFax($travailFax)
    {
        $this->travailFax = $travailFax;

        return $this;
    }

    /**
     * Get travailFax
     *
     * @return string
     */
    public function getTravailFax()
    {
        return $this->travailFax;
    }

    /**
     * Set travailMail
     *
     * @param string $travailMail
     *
     * @return Individus
     */
    public function setTravailMail($travailMail)
    {
        $this->travailMail = $travailMail;

        return $this;
    }

    /**
     * Get travailMail
     *
     * @return string
     */
    public function getTravailMail()
    {
        return $this->travailMail;
    }

    /**
     * Set telDomicile
     *
     * @param string $telDomicile
     *
     * @return Individus
     */
    public function setTelDomicile($telDomicile)
    {
        $this->telDomicile = $telDomicile;

        return $this;
    }

    /**
     * Get telDomicile
     *
     * @return string
     */
    public function getTelDomicile()
    {
        return $this->telDomicile;
    }

    /**
     * Set telMobile
     *
     * @param string $telMobile
     *
     * @return Individus
     */
    public function setTelMobile($telMobile)
    {
        $this->telMobile = $telMobile;

        return $this;
    }

    /**
     * Get telMobile
     *
     * @return string
     */
    public function getTelMobile()
    {
        return $this->telMobile;
    }

    /**
     * Set telFax
     *
     * @param string $telFax
     *
     * @return Individus
     */
    public function setTelFax($telFax)
    {
        $this->telFax = $telFax;

        return $this;
    }

    /**
     * Get telFax
     *
     * @return string
     */
    public function getTelFax()
    {
        return $this->telFax;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Individus
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set memo
     *
     * @param string $memo
     *
     * @return Individus
     */
    public function setMemo($memo)
    {
        $this->memo = $memo;

        return $this;
    }

    /**
     * Get memo
     *
     * @return string
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * Set dateCreation
     *
     * @param string $dateCreation
     *
     * @return Individus
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return string
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set idsecteur
     *
     * @param \ConnecthysBundle\Entity\Secteurs $idsecteur
     *
     * @return Individus
     */
    public function setIdsecteur(\ConnecthysBundle\Entity\Secteurs $idsecteur = null)
    {
        $this->idsecteur = $idsecteur;

        return $this;
    }

    /**
     * Get idsecteur
     *
     * @return \ConnecthysBundle\Entity\Secteurs
     */
    public function getIdsecteur()
    {
        return $this->idsecteur;
    }

    /**
     * Set idcategorieTravail
     *
     * @param \ConnecthysBundle\Entity\CategoriesTravail $idcategorieTravail
     *
     * @return Individus
     */
    public function setIdcategorieTravail(\ConnecthysBundle\Entity\CategoriesTravail $idcategorieTravail = null)
    {
        $this->idcategorieTravail = $idcategorieTravail;

        return $this;
    }

    /**
     * Get idcategorieTravail
     *
     * @return \ConnecthysBundle\Entity\CategoriesTravail
     */
    public function getIdcategorieTravail()
    {
        return $this->idcategorieTravail;
    }

    /**
     * Set idmedecin
     *
     * @param \ConnecthysBundle\Entity\Medecins $idmedecin
     *
     * @return Individus
     */
    public function setIdmedecin(\ConnecthysBundle\Entity\Medecins $idmedecin = null)
    {
        $this->idmedecin = $idmedecin;

        return $this;
    }

    /**
     * Get idmedecin
     *
     * @return \ConnecthysBundle\Entity\Medecins
     */
    public function getIdmedecin()
    {
        return $this->idmedecin;
    }

    /**
     * Set idtypeSieste
     *
     * @param \ConnecthysBundle\Entity\TypesSieste $idtypeSieste
     *
     * @return Individus
     */
    public function setIdtypeSieste(\ConnecthysBundle\Entity\TypesSieste $idtypeSieste = null)
    {
        $this->idtypeSieste = $idtypeSieste;

        return $this;
    }

    /**
     * Get idtypeSieste
     *
     * @return \ConnecthysBundle\Entity\TypesSieste
     */
    public function getIdtypeSieste()
    {
        return $this->idtypeSieste;
    }
}
