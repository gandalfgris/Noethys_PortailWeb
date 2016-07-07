<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Familles
 *
 * @ORM\Table(name="familles", indexes={@ORM\Index(name="index_familles_IDcompte_payeur", columns={"IDcompte_payeur"}), @ORM\Index(name="IDcompte_payeur", columns={"IDcompte_payeur"}), @ORM\Index(name="IDcaisse", columns={"IDcaisse"})})
 * @ORM\Entity(repositoryClass="ConnecthysBundle\Repository\FamillesRepository")
 */
class Familles implements AdvancedUserInterface
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDfamille", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfamille;

    /**
     * @var string
     *
     * @ORM\Column(name="date_creation", type="string", length=10, nullable=true)
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="num_allocataire", type="string", length=100, nullable=true)
     */
    private $numAllocataire;

    /**
     * @var integer
     *
     * @ORM\Column(name="allocataire", type="integer", nullable=true)
     */
    private $allocataire;

    /**
     * @var integer
     *
     * @ORM\Column(name="internet_actif", type="integer", nullable=true)
     */
    private $internetActif;

    /**
     * @var string
     *
     * @ORM\Column(name="internet_identifiant", type="string", length=50, nullable=true)
     */
    private $internetIdentifiant;

    /**
     * @var string
     *
     * @ORM\Column(name="internet_mdp", type="string", length=50, nullable=true)
     */
    private $internetMdp;

    /**
     * @var string
     *
     * @ORM\Column(name="memo", type="text", length=65535, nullable=true)
     */
    private $memo;

    /**
     * @var integer
     *
     * @ORM\Column(name="prelevement_activation", type="integer", nullable=true)
     */
    private $prelevementActivation;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_etab", type="string", length=50, nullable=true)
     */
    private $prelevementEtab;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_guichet", type="string", length=50, nullable=true)
     */
    private $prelevementGuichet;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_numero", type="string", length=50, nullable=true)
     */
    private $prelevementNumero;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_cle", type="string", length=50, nullable=true)
     */
    private $prelevementCle;

    /**
     * @var integer
     *
     * @ORM\Column(name="prelevement_banque", type="integer", nullable=true)
     */
    private $prelevementBanque;

    /**
     * @var integer
     *
     * @ORM\Column(name="prelevement_individu", type="integer", nullable=true)
     */
    private $prelevementIndividu;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_nom", type="string", length=200, nullable=true)
     */
    private $prelevementNom;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_rue", type="text", length=65535, nullable=true)
     */
    private $prelevementRue;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_cp", type="string", length=50, nullable=true)
     */
    private $prelevementCp;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_ville", type="text", length=65535, nullable=true)
     */
    private $prelevementVille;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_cle_iban", type="string", length=10, nullable=true)
     */
    private $prelevementCleIban;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_iban", type="string", length=100, nullable=true)
     */
    private $prelevementIban;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_bic", type="string", length=100, nullable=true)
     */
    private $prelevementBic;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_reference_mandat", type="text", length=65535, nullable=true)
     */
    private $prelevementReferenceMandat;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_date_mandat", type="string", length=10, nullable=true)
     */
    private $prelevementDateMandat;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_memo", type="text", length=65535, nullable=true)
     */
    private $prelevementMemo;

    /**
     * @var string
     *
     * @ORM\Column(name="email_factures", type="text", length=65535, nullable=true)
     */
    private $emailFactures;

    /**
     * @var string
     *
     * @ORM\Column(name="email_recus", type="text", length=65535, nullable=true)
     */
    private $emailRecus;

    /**
     * @var string
     *
     * @ORM\Column(name="email_depots", type="text", length=65535, nullable=true)
     */
    private $emailDepots;

    /**
     * @var integer
     *
     * @ORM\Column(name="titulaire_helios", type="integer", nullable=true)
     */
    private $titulaireHelios;

    /**
     * @var string
     *
     * @ORM\Column(name="code_comptable", type="text", length=65535, nullable=true)
     */
    private $codeComptable;

    /**
     * @var string
     *
     * @ORM\Column(name="idtiers_helios", type="text", length=65535, nullable=true)
     */
    private $idtiersHelios;

    /**
     * @var integer
     *
     * @ORM\Column(name="natidtiers_helios", type="integer", nullable=true)
     */
    private $natidtiersHelios;

    /**
     * @var string
     *
     * @ORM\Column(name="reftiers_helios", type="text", length=65535, nullable=true)
     */
    private $reftiersHelios;

    /**
     * @var integer
     *
     * @ORM\Column(name="cattiers_helios", type="integer", nullable=true)
     */
    private $cattiersHelios;

    /**
     * @var integer
     *
     * @ORM\Column(name="natjur_helios", type="integer", nullable=true)
     */
    private $natjurHelios;

    /**
     * @var integer
     *
     * @ORM\Column(name="autorisation_cafpro", type="integer", nullable=true)
     */
    private $autorisationCafpro;

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
     * @var \Caisses
     *
     * @ORM\ManyToOne(targetEntity="Caisses")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDcaisse", referencedColumnName="IDcaisse")
     * })
     */
    private $idcaisse;

    private $salt;
    private $roles;

    /**
     * Famille constructor.
     */
    public function __construct(){

        $this->salt = base64_encode(random_bytes(10));
        $this->roles = array("ROLE_USER");

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
     * Set dateCreation
     *
     * @param string $dateCreation
     *
     * @return Familles
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
     * Set numAllocataire
     *
     * @param string $numAllocataire
     *
     * @return Familles
     */
    public function setNumAllocataire($numAllocataire)
    {
        $this->numAllocataire = $numAllocataire;

        return $this;
    }

    /**
     * Get numAllocataire
     *
     * @return string
     */
    public function getNumAllocataire()
    {
        return $this->numAllocataire;
    }

    /**
     * Set allocataire
     *
     * @param integer $allocataire
     *
     * @return Familles
     */
    public function setAllocataire($allocataire)
    {
        $this->allocataire = $allocataire;

        return $this;
    }

    /**
     * Get allocataire
     *
     * @return integer
     */
    public function getAllocataire()
    {
        return $this->allocataire;
    }

    /**
     * Set internetActif
     *
     * @param integer $internetActif
     *
     * @return Familles
     */
    public function setInternetActif($internetActif)
    {
        $this->internetActif = $internetActif;

        return $this;
    }

    /**
     * Get internetActif
     *
     * @return integer
     */
    public function getInternetActif()
    {
        return $this->internetActif;
    }

    /**
     * Set internetIdentifiant
     *
     * @param string $internetIdentifiant
     *
     * @return Familles
     */
    public function setInternetIdentifiant($internetIdentifiant)
    {
        $this->internetIdentifiant = $internetIdentifiant;

        return $this;
    }

    /**
     * Get internetIdentifiant
     *
     * @return string
     */
    public function getInternetIdentifiant()
    {
        return $this->internetIdentifiant;
    }

    /**
     * Set internetMdp
     *
     * @param string $internetMdp
     *
     * @return Familles
     */
    public function setInternetMdp($internetMdp)
    {
        $this->internetMdp = $internetMdp;

        return $this;
    }

    /**
     * Get internetMdp
     *
     * @return string
     */
    public function getInternetMdp()
    {
        return $this->internetMdp;
    }

    /**
     * Set memo
     *
     * @param string $memo
     *
     * @return Familles
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
     * Set prelevementActivation
     *
     * @param integer $prelevementActivation
     *
     * @return Familles
     */
    public function setPrelevementActivation($prelevementActivation)
    {
        $this->prelevementActivation = $prelevementActivation;

        return $this;
    }

    /**
     * Get prelevementActivation
     *
     * @return integer
     */
    public function getPrelevementActivation()
    {
        return $this->prelevementActivation;
    }

    /**
     * Set prelevementEtab
     *
     * @param string $prelevementEtab
     *
     * @return Familles
     */
    public function setPrelevementEtab($prelevementEtab)
    {
        $this->prelevementEtab = $prelevementEtab;

        return $this;
    }

    /**
     * Get prelevementEtab
     *
     * @return string
     */
    public function getPrelevementEtab()
    {
        return $this->prelevementEtab;
    }

    /**
     * Set prelevementGuichet
     *
     * @param string $prelevementGuichet
     *
     * @return Familles
     */
    public function setPrelevementGuichet($prelevementGuichet)
    {
        $this->prelevementGuichet = $prelevementGuichet;

        return $this;
    }

    /**
     * Get prelevementGuichet
     *
     * @return string
     */
    public function getPrelevementGuichet()
    {
        return $this->prelevementGuichet;
    }

    /**
     * Set prelevementNumero
     *
     * @param string $prelevementNumero
     *
     * @return Familles
     */
    public function setPrelevementNumero($prelevementNumero)
    {
        $this->prelevementNumero = $prelevementNumero;

        return $this;
    }

    /**
     * Get prelevementNumero
     *
     * @return string
     */
    public function getPrelevementNumero()
    {
        return $this->prelevementNumero;
    }

    /**
     * Set prelevementCle
     *
     * @param string $prelevementCle
     *
     * @return Familles
     */
    public function setPrelevementCle($prelevementCle)
    {
        $this->prelevementCle = $prelevementCle;

        return $this;
    }

    /**
     * Get prelevementCle
     *
     * @return string
     */
    public function getPrelevementCle()
    {
        return $this->prelevementCle;
    }

    /**
     * Set prelevementBanque
     *
     * @param integer $prelevementBanque
     *
     * @return Familles
     */
    public function setPrelevementBanque($prelevementBanque)
    {
        $this->prelevementBanque = $prelevementBanque;

        return $this;
    }

    /**
     * Get prelevementBanque
     *
     * @return integer
     */
    public function getPrelevementBanque()
    {
        return $this->prelevementBanque;
    }

    /**
     * Set prelevementIndividu
     *
     * @param integer $prelevementIndividu
     *
     * @return Familles
     */
    public function setPrelevementIndividu($prelevementIndividu)
    {
        $this->prelevementIndividu = $prelevementIndividu;

        return $this;
    }

    /**
     * Get prelevementIndividu
     *
     * @return integer
     */
    public function getPrelevementIndividu()
    {
        return $this->prelevementIndividu;
    }

    /**
     * Set prelevementNom
     *
     * @param string $prelevementNom
     *
     * @return Familles
     */
    public function setPrelevementNom($prelevementNom)
    {
        $this->prelevementNom = $prelevementNom;

        return $this;
    }

    /**
     * Get prelevementNom
     *
     * @return string
     */
    public function getPrelevementNom()
    {
        return $this->prelevementNom;
    }

    /**
     * Set prelevementRue
     *
     * @param string $prelevementRue
     *
     * @return Familles
     */
    public function setPrelevementRue($prelevementRue)
    {
        $this->prelevementRue = $prelevementRue;

        return $this;
    }

    /**
     * Get prelevementRue
     *
     * @return string
     */
    public function getPrelevementRue()
    {
        return $this->prelevementRue;
    }

    /**
     * Set prelevementCp
     *
     * @param string $prelevementCp
     *
     * @return Familles
     */
    public function setPrelevementCp($prelevementCp)
    {
        $this->prelevementCp = $prelevementCp;

        return $this;
    }

    /**
     * Get prelevementCp
     *
     * @return string
     */
    public function getPrelevementCp()
    {
        return $this->prelevementCp;
    }

    /**
     * Set prelevementVille
     *
     * @param string $prelevementVille
     *
     * @return Familles
     */
    public function setPrelevementVille($prelevementVille)
    {
        $this->prelevementVille = $prelevementVille;

        return $this;
    }

    /**
     * Get prelevementVille
     *
     * @return string
     */
    public function getPrelevementVille()
    {
        return $this->prelevementVille;
    }

    /**
     * Set prelevementCleIban
     *
     * @param string $prelevementCleIban
     *
     * @return Familles
     */
    public function setPrelevementCleIban($prelevementCleIban)
    {
        $this->prelevementCleIban = $prelevementCleIban;

        return $this;
    }

    /**
     * Get prelevementCleIban
     *
     * @return string
     */
    public function getPrelevementCleIban()
    {
        return $this->prelevementCleIban;
    }

    /**
     * Set prelevementIban
     *
     * @param string $prelevementIban
     *
     * @return Familles
     */
    public function setPrelevementIban($prelevementIban)
    {
        $this->prelevementIban = $prelevementIban;

        return $this;
    }

    /**
     * Get prelevementIban
     *
     * @return string
     */
    public function getPrelevementIban()
    {
        return $this->prelevementIban;
    }

    /**
     * Set prelevementBic
     *
     * @param string $prelevementBic
     *
     * @return Familles
     */
    public function setPrelevementBic($prelevementBic)
    {
        $this->prelevementBic = $prelevementBic;

        return $this;
    }

    /**
     * Get prelevementBic
     *
     * @return string
     */
    public function getPrelevementBic()
    {
        return $this->prelevementBic;
    }

    /**
     * Set prelevementReferenceMandat
     *
     * @param string $prelevementReferenceMandat
     *
     * @return Familles
     */
    public function setPrelevementReferenceMandat($prelevementReferenceMandat)
    {
        $this->prelevementReferenceMandat = $prelevementReferenceMandat;

        return $this;
    }

    /**
     * Get prelevementReferenceMandat
     *
     * @return string
     */
    public function getPrelevementReferenceMandat()
    {
        return $this->prelevementReferenceMandat;
    }

    /**
     * Set prelevementDateMandat
     *
     * @param string $prelevementDateMandat
     *
     * @return Familles
     */
    public function setPrelevementDateMandat($prelevementDateMandat)
    {
        $this->prelevementDateMandat = $prelevementDateMandat;

        return $this;
    }

    /**
     * Get prelevementDateMandat
     *
     * @return string
     */
    public function getPrelevementDateMandat()
    {
        return $this->prelevementDateMandat;
    }

    /**
     * Set prelevementMemo
     *
     * @param string $prelevementMemo
     *
     * @return Familles
     */
    public function setPrelevementMemo($prelevementMemo)
    {
        $this->prelevementMemo = $prelevementMemo;

        return $this;
    }

    /**
     * Get prelevementMemo
     *
     * @return string
     */
    public function getPrelevementMemo()
    {
        return $this->prelevementMemo;
    }

    /**
     * Set emailFactures
     *
     * @param string $emailFactures
     *
     * @return Familles
     */
    public function setEmailFactures($emailFactures)
    {
        $this->emailFactures = $emailFactures;

        return $this;
    }

    /**
     * Get emailFactures
     *
     * @return string
     */
    public function getEmailFactures()
    {
        return $this->emailFactures;
    }

    /**
     * Set emailRecus
     *
     * @param string $emailRecus
     *
     * @return Familles
     */
    public function setEmailRecus($emailRecus)
    {
        $this->emailRecus = $emailRecus;

        return $this;
    }

    /**
     * Get emailRecus
     *
     * @return string
     */
    public function getEmailRecus()
    {
        return $this->emailRecus;
    }

    /**
     * Set emailDepots
     *
     * @param string $emailDepots
     *
     * @return Familles
     */
    public function setEmailDepots($emailDepots)
    {
        $this->emailDepots = $emailDepots;

        return $this;
    }

    /**
     * Get emailDepots
     *
     * @return string
     */
    public function getEmailDepots()
    {
        return $this->emailDepots;
    }

    /**
     * Set titulaireHelios
     *
     * @param integer $titulaireHelios
     *
     * @return Familles
     */
    public function setTitulaireHelios($titulaireHelios)
    {
        $this->titulaireHelios = $titulaireHelios;

        return $this;
    }

    /**
     * Get titulaireHelios
     *
     * @return integer
     */
    public function getTitulaireHelios()
    {
        return $this->titulaireHelios;
    }

    /**
     * Set codeComptable
     *
     * @param string $codeComptable
     *
     * @return Familles
     */
    public function setCodeComptable($codeComptable)
    {
        $this->codeComptable = $codeComptable;

        return $this;
    }

    /**
     * Get codeComptable
     *
     * @return string
     */
    public function getCodeComptable()
    {
        return $this->codeComptable;
    }

    /**
     * Set idtiersHelios
     *
     * @param string $idtiersHelios
     *
     * @return Familles
     */
    public function setIdtiersHelios($idtiersHelios)
    {
        $this->idtiersHelios = $idtiersHelios;

        return $this;
    }

    /**
     * Get idtiersHelios
     *
     * @return string
     */
    public function getIdtiersHelios()
    {
        return $this->idtiersHelios;
    }

    /**
     * Set natidtiersHelios
     *
     * @param integer $natidtiersHelios
     *
     * @return Familles
     */
    public function setNatidtiersHelios($natidtiersHelios)
    {
        $this->natidtiersHelios = $natidtiersHelios;

        return $this;
    }

    /**
     * Get natidtiersHelios
     *
     * @return integer
     */
    public function getNatidtiersHelios()
    {
        return $this->natidtiersHelios;
    }

    /**
     * Set reftiersHelios
     *
     * @param string $reftiersHelios
     *
     * @return Familles
     */
    public function setReftiersHelios($reftiersHelios)
    {
        $this->reftiersHelios = $reftiersHelios;

        return $this;
    }

    /**
     * Get reftiersHelios
     *
     * @return string
     */
    public function getReftiersHelios()
    {
        return $this->reftiersHelios;
    }

    /**
     * Set cattiersHelios
     *
     * @param integer $cattiersHelios
     *
     * @return Familles
     */
    public function setCattiersHelios($cattiersHelios)
    {
        $this->cattiersHelios = $cattiersHelios;

        return $this;
    }

    /**
     * Get cattiersHelios
     *
     * @return integer
     */
    public function getCattiersHelios()
    {
        return $this->cattiersHelios;
    }

    /**
     * Set natjurHelios
     *
     * @param integer $natjurHelios
     *
     * @return Familles
     */
    public function setNatjurHelios($natjurHelios)
    {
        $this->natjurHelios = $natjurHelios;

        return $this;
    }

    /**
     * Get natjurHelios
     *
     * @return integer
     */
    public function getNatjurHelios()
    {
        return $this->natjurHelios;
    }

    /**
     * Set autorisationCafpro
     *
     * @param integer $autorisationCafpro
     *
     * @return Familles
     */
    public function setAutorisationCafpro($autorisationCafpro)
    {
        $this->autorisationCafpro = $autorisationCafpro;

        return $this;
    }

    /**
     * Get autorisationCafpro
     *
     * @return integer
     */
    public function getAutorisationCafpro()
    {
        return $this->autorisationCafpro;
    }

    /**
     * Set idcomptePayeur
     *
     * @param \ConnecthysBundle\Entity\ComptesPayeurs $idcomptePayeur
     *
     * @return Familles
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
     * Set idcaisse
     *
     * @param \ConnecthysBundle\Entity\Caisses $idcaisse
     *
     * @return Familles
     */
    public function setIdcaisse(\ConnecthysBundle\Entity\Caisses $idcaisse = null)
    {
        $this->idcaisse = $idcaisse;

        return $this;
    }

    /**
     * Get idcaisse
     *
     * @return \ConnecthysBundle\Entity\Caisses
     */
    public function getIdcaisse()
    {
        return $this->idcaisse;
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->idfamille;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Famille
     */
    public function setUsername($username)
    {
        $this->internetIdentifiant = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->internetIdentifiant;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Famille
     */
    public function setPassword($password)
    {
        $this->internetMdp = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->internetMdp;
    }

    /**
     * Set roles
     *
     * @param array $roles
     *
     * @return Famille
     */
    public function setRoles($roles)
    {
        //$this->roles = $roles;

        return $this;
    }

    /**
     * Get roles
     *
     * @return array
     */
    public function getRoles()
    {
        return array("ROLE_USER"); //$this->roles;
    }

    /**
     * Set salt
     *
     * @param string $salt
     *
     * @return Famille
     */
    public function setSalt($salt)
    {
        $this->salt = ''; $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string
     */
    public function getSalt()
    {
        return ''; //$this->salt;
    }



    public function eraseCredentials()
    {
        return ;
    }

    public function isAccountNonExpired()
    {
        return true;
    }

    public function isAccountNonLocked()
    {
        return true;
    }

    public function isCredentialsNonExpired()
    {
        return true;
    }

    public function isEnabled()
    {
        return $this->internetActif;
    }


}
