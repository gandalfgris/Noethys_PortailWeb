<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cotisations
 *
 * @ORM\Table(name="cotisations", indexes={@ORM\Index(name="IDfamille", columns={"IDfamille"}), @ORM\Index(name="IDindividu", columns={"IDindividu"}), @ORM\Index(name="IDtype_cotisation", columns={"IDtype_cotisation"}), @ORM\Index(name="IDunite_cotisation", columns={"IDunite_cotisation"}), @ORM\Index(name="IDutilisateur", columns={"IDutilisateur"}), @ORM\Index(name="IDdepot_cotisation", columns={"IDdepot_cotisation"}), @ORM\Index(name="IDprestation", columns={"IDprestation"})})
 * @ORM\Entity
 */
class Cotisations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDcotisation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcotisation;

    /**
     * @var string
     *
     * @ORM\Column(name="date_saisie", type="string", length=10, nullable=true)
     */
    private $dateSaisie;

    /**
     * @var string
     *
     * @ORM\Column(name="date_creation_carte", type="string", length=10, nullable=true)
     */
    private $dateCreationCarte;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=50, nullable=true)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="date_debut", type="string", length=10, nullable=true)
     */
    private $dateDebut;

    /**
     * @var string
     *
     * @ORM\Column(name="date_fin", type="string", length=10, nullable=true)
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="observations", type="text", length=65535, nullable=true)
     */
    private $observations;

    /**
     * @var string
     *
     * @ORM\Column(name="activites", type="text", length=65535, nullable=true)
     */
    private $activites;

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
     * @var \Individus
     *
     * @ORM\ManyToOne(targetEntity="Individus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDindividu", referencedColumnName="IDindividu")
     * })
     */
    private $idindividu;

    /**
     * @var \TypesCotisations
     *
     * @ORM\ManyToOne(targetEntity="TypesCotisations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDtype_cotisation", referencedColumnName="IDtype_cotisation")
     * })
     */
    private $idtypeCotisation;

    /**
     * @var \UnitesCotisations
     *
     * @ORM\ManyToOne(targetEntity="UnitesCotisations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDunite_cotisation", referencedColumnName="IDunite_cotisation")
     * })
     */
    private $iduniteCotisation;

    /**
     * @var \Utilisateurs
     *
     * @ORM\ManyToOne(targetEntity="Utilisateurs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDutilisateur", referencedColumnName="IDutilisateur")
     * })
     */
    private $idutilisateur;

    /**
     * @var \DepotsCotisations
     *
     * @ORM\ManyToOne(targetEntity="DepotsCotisations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDdepot_cotisation", referencedColumnName="IDdepot_cotisation")
     * })
     */
    private $iddepotCotisation;

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
     * Get idcotisation
     *
     * @return integer
     */
    public function getIdcotisation()
    {
        return $this->idcotisation;
    }

    /**
     * Set dateSaisie
     *
     * @param string $dateSaisie
     *
     * @return Cotisations
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
     * Set dateCreationCarte
     *
     * @param string $dateCreationCarte
     *
     * @return Cotisations
     */
    public function setDateCreationCarte($dateCreationCarte)
    {
        $this->dateCreationCarte = $dateCreationCarte;

        return $this;
    }

    /**
     * Get dateCreationCarte
     *
     * @return string
     */
    public function getDateCreationCarte()
    {
        return $this->dateCreationCarte;
    }

    /**
     * Set numero
     *
     * @param string $numero
     *
     * @return Cotisations
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set dateDebut
     *
     * @param string $dateDebut
     *
     * @return Cotisations
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return string
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param string $dateFin
     *
     * @return Cotisations
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return string
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set observations
     *
     * @param string $observations
     *
     * @return Cotisations
     */
    public function setObservations($observations)
    {
        $this->observations = $observations;

        return $this;
    }

    /**
     * Get observations
     *
     * @return string
     */
    public function getObservations()
    {
        return $this->observations;
    }

    /**
     * Set activites
     *
     * @param string $activites
     *
     * @return Cotisations
     */
    public function setActivites($activites)
    {
        $this->activites = $activites;

        return $this;
    }

    /**
     * Get activites
     *
     * @return string
     */
    public function getActivites()
    {
        return $this->activites;
    }

    /**
     * Set idfamille
     *
     * @param \ConnecthysBundle\Entity\Familles $idfamille
     *
     * @return Cotisations
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
     * Set idindividu
     *
     * @param \ConnecthysBundle\Entity\Individus $idindividu
     *
     * @return Cotisations
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
     * Set idtypeCotisation
     *
     * @param \ConnecthysBundle\Entity\TypesCotisations $idtypeCotisation
     *
     * @return Cotisations
     */
    public function setIdtypeCotisation(\ConnecthysBundle\Entity\TypesCotisations $idtypeCotisation = null)
    {
        $this->idtypeCotisation = $idtypeCotisation;

        return $this;
    }

    /**
     * Get idtypeCotisation
     *
     * @return \ConnecthysBundle\Entity\TypesCotisations
     */
    public function getIdtypeCotisation()
    {
        return $this->idtypeCotisation;
    }

    /**
     * Set iduniteCotisation
     *
     * @param \ConnecthysBundle\Entity\UnitesCotisations $iduniteCotisation
     *
     * @return Cotisations
     */
    public function setIduniteCotisation(\ConnecthysBundle\Entity\UnitesCotisations $iduniteCotisation = null)
    {
        $this->iduniteCotisation = $iduniteCotisation;

        return $this;
    }

    /**
     * Get iduniteCotisation
     *
     * @return \ConnecthysBundle\Entity\UnitesCotisations
     */
    public function getIduniteCotisation()
    {
        return $this->iduniteCotisation;
    }

    /**
     * Set idutilisateur
     *
     * @param \ConnecthysBundle\Entity\Utilisateurs $idutilisateur
     *
     * @return Cotisations
     */
    public function setIdutilisateur(\ConnecthysBundle\Entity\Utilisateurs $idutilisateur = null)
    {
        $this->idutilisateur = $idutilisateur;

        return $this;
    }

    /**
     * Get idutilisateur
     *
     * @return \ConnecthysBundle\Entity\Utilisateurs
     */
    public function getIdutilisateur()
    {
        return $this->idutilisateur;
    }

    /**
     * Set iddepotCotisation
     *
     * @param \ConnecthysBundle\Entity\DepotsCotisations $iddepotCotisation
     *
     * @return Cotisations
     */
    public function setIddepotCotisation(\ConnecthysBundle\Entity\DepotsCotisations $iddepotCotisation = null)
    {
        $this->iddepotCotisation = $iddepotCotisation;

        return $this;
    }

    /**
     * Get iddepotCotisation
     *
     * @return \ConnecthysBundle\Entity\DepotsCotisations
     */
    public function getIddepotCotisation()
    {
        return $this->iddepotCotisation;
    }

    /**
     * Set idprestation
     *
     * @param \ConnecthysBundle\Entity\Prestations $idprestation
     *
     * @return Cotisations
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
