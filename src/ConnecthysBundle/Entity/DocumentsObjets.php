<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DocumentsObjets
 *
 * @ORM\Table(name="documents_objets")
 * @ORM\Entity
 */
class DocumentsObjets
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDobjet", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idobjet;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDmodele", type="integer", nullable=true)
     */
    private $idmodele;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=200, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=200, nullable=true)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="champ", type="string", length=200, nullable=true)
     */
    private $champ;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordre", type="integer", nullable=true)
     */
    private $ordre;

    /**
     * @var integer
     *
     * @ORM\Column(name="obligatoire", type="integer", nullable=true)
     */
    private $obligatoire;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbreMax", type="integer", nullable=true)
     */
    private $nbremax;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="text", length=65535, nullable=true)
     */
    private $texte;

    /**
     * @var string
     *
     * @ORM\Column(name="points", type="text", length=65535, nullable=true)
     */
    private $points;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="blob", nullable=true)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="typeImage", type="string", length=100, nullable=true)
     */
    private $typeimage;

    /**
     * @var integer
     *
     * @ORM\Column(name="x", type="integer", nullable=true)
     */
    private $x;

    /**
     * @var integer
     *
     * @ORM\Column(name="y", type="integer", nullable=true)
     */
    private $y;

    /**
     * @var integer
     *
     * @ORM\Column(name="verrouillageX", type="integer", nullable=true)
     */
    private $verrouillagex;

    /**
     * @var integer
     *
     * @ORM\Column(name="verrouillageY", type="integer", nullable=true)
     */
    private $verrouillagey;

    /**
     * @var integer
     *
     * @ORM\Column(name="Xmodifiable", type="integer", nullable=true)
     */
    private $xmodifiable;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ymodifiable", type="integer", nullable=true)
     */
    private $ymodifiable;

    /**
     * @var integer
     *
     * @ORM\Column(name="largeur", type="integer", nullable=true)
     */
    private $largeur;

    /**
     * @var integer
     *
     * @ORM\Column(name="hauteur", type="integer", nullable=true)
     */
    private $hauteur;

    /**
     * @var integer
     *
     * @ORM\Column(name="largeurModifiable", type="integer", nullable=true)
     */
    private $largeurmodifiable;

    /**
     * @var integer
     *
     * @ORM\Column(name="hauteurModifiable", type="integer", nullable=true)
     */
    private $hauteurmodifiable;

    /**
     * @var integer
     *
     * @ORM\Column(name="largeurMin", type="integer", nullable=true)
     */
    private $largeurmin;

    /**
     * @var integer
     *
     * @ORM\Column(name="largeurMax", type="integer", nullable=true)
     */
    private $largeurmax;

    /**
     * @var integer
     *
     * @ORM\Column(name="hauteurMin", type="integer", nullable=true)
     */
    private $hauteurmin;

    /**
     * @var integer
     *
     * @ORM\Column(name="hauteurMax", type="integer", nullable=true)
     */
    private $hauteurmax;

    /**
     * @var integer
     *
     * @ORM\Column(name="verrouillageLargeur", type="integer", nullable=true)
     */
    private $verrouillagelargeur;

    /**
     * @var integer
     *
     * @ORM\Column(name="verrouillageHauteur", type="integer", nullable=true)
     */
    private $verrouillagehauteur;

    /**
     * @var integer
     *
     * @ORM\Column(name="verrouillageProportions", type="integer", nullable=true)
     */
    private $verrouillageproportions;

    /**
     * @var integer
     *
     * @ORM\Column(name="interditModifProportions", type="integer", nullable=true)
     */
    private $interditmodifproportions;

    /**
     * @var string
     *
     * @ORM\Column(name="couleurTrait", type="string", length=100, nullable=true)
     */
    private $couleurtrait;

    /**
     * @var string
     *
     * @ORM\Column(name="styleTrait", type="string", length=100, nullable=true)
     */
    private $styletrait;

    /**
     * @var float
     *
     * @ORM\Column(name="epaissTrait", type="float", precision=10, scale=0, nullable=true)
     */
    private $epaisstrait;

    /**
     * @var string
     *
     * @ORM\Column(name="coulRemplis", type="string", length=100, nullable=true)
     */
    private $coulremplis;

    /**
     * @var string
     *
     * @ORM\Column(name="styleRemplis", type="string", length=100, nullable=true)
     */
    private $styleremplis;

    /**
     * @var string
     *
     * @ORM\Column(name="couleurTexte", type="string", length=100, nullable=true)
     */
    private $couleurtexte;

    /**
     * @var string
     *
     * @ORM\Column(name="couleurFond", type="string", length=100, nullable=true)
     */
    private $couleurfond;

    /**
     * @var float
     *
     * @ORM\Column(name="padding", type="float", precision=10, scale=0, nullable=true)
     */
    private $padding;

    /**
     * @var float
     *
     * @ORM\Column(name="interligne", type="float", precision=10, scale=0, nullable=true)
     */
    private $interligne;

    /**
     * @var integer
     *
     * @ORM\Column(name="taillePolice", type="integer", nullable=true)
     */
    private $taillepolice;

    /**
     * @var string
     *
     * @ORM\Column(name="nomPolice", type="string", length=100, nullable=true)
     */
    private $nompolice;

    /**
     * @var integer
     *
     * @ORM\Column(name="familyPolice", type="integer", nullable=true)
     */
    private $familypolice;

    /**
     * @var integer
     *
     * @ORM\Column(name="stylePolice", type="integer", nullable=true)
     */
    private $stylepolice;

    /**
     * @var integer
     *
     * @ORM\Column(name="weightPolice", type="integer", nullable=true)
     */
    private $weightpolice;

    /**
     * @var integer
     *
     * @ORM\Column(name="soulignePolice", type="integer", nullable=true)
     */
    private $soulignepolice;

    /**
     * @var string
     *
     * @ORM\Column(name="alignement", type="string", length=100, nullable=true)
     */
    private $alignement;

    /**
     * @var integer
     *
     * @ORM\Column(name="largeurTexte", type="integer", nullable=true)
     */
    private $largeurtexte;

    /**
     * @var string
     *
     * @ORM\Column(name="norme", type="string", length=100, nullable=true)
     */
    private $norme;

    /**
     * @var integer
     *
     * @ORM\Column(name="afficheNumero", type="integer", nullable=true)
     */
    private $affichenumero;



    /**
     * Get idobjet
     *
     * @return integer
     */
    public function getIdobjet()
    {
        return $this->idobjet;
    }

    /**
     * Set idmodele
     *
     * @param integer $idmodele
     *
     * @return DocumentsObjets
     */
    public function setIdmodele($idmodele)
    {
        $this->idmodele = $idmodele;

        return $this;
    }

    /**
     * Get idmodele
     *
     * @return integer
     */
    public function getIdmodele()
    {
        return $this->idmodele;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return DocumentsObjets
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
     * Set categorie
     *
     * @param string $categorie
     *
     * @return DocumentsObjets
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set champ
     *
     * @param string $champ
     *
     * @return DocumentsObjets
     */
    public function setChamp($champ)
    {
        $this->champ = $champ;

        return $this;
    }

    /**
     * Get champ
     *
     * @return string
     */
    public function getChamp()
    {
        return $this->champ;
    }

    /**
     * Set ordre
     *
     * @param integer $ordre
     *
     * @return DocumentsObjets
     */
    public function setOrdre($ordre)
    {
        $this->ordre = $ordre;

        return $this;
    }

    /**
     * Get ordre
     *
     * @return integer
     */
    public function getOrdre()
    {
        return $this->ordre;
    }

    /**
     * Set obligatoire
     *
     * @param integer $obligatoire
     *
     * @return DocumentsObjets
     */
    public function setObligatoire($obligatoire)
    {
        $this->obligatoire = $obligatoire;

        return $this;
    }

    /**
     * Get obligatoire
     *
     * @return integer
     */
    public function getObligatoire()
    {
        return $this->obligatoire;
    }

    /**
     * Set nbremax
     *
     * @param integer $nbremax
     *
     * @return DocumentsObjets
     */
    public function setNbremax($nbremax)
    {
        $this->nbremax = $nbremax;

        return $this;
    }

    /**
     * Get nbremax
     *
     * @return integer
     */
    public function getNbremax()
    {
        return $this->nbremax;
    }

    /**
     * Set texte
     *
     * @param string $texte
     *
     * @return DocumentsObjets
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
     * Set points
     *
     * @param string $points
     *
     * @return DocumentsObjets
     */
    public function setPoints($points)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * Get points
     *
     * @return string
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return DocumentsObjets
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set typeimage
     *
     * @param string $typeimage
     *
     * @return DocumentsObjets
     */
    public function setTypeimage($typeimage)
    {
        $this->typeimage = $typeimage;

        return $this;
    }

    /**
     * Get typeimage
     *
     * @return string
     */
    public function getTypeimage()
    {
        return $this->typeimage;
    }

    /**
     * Set x
     *
     * @param integer $x
     *
     * @return DocumentsObjets
     */
    public function setX($x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Get x
     *
     * @return integer
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Set y
     *
     * @param integer $y
     *
     * @return DocumentsObjets
     */
    public function setY($y)
    {
        $this->y = $y;

        return $this;
    }

    /**
     * Get y
     *
     * @return integer
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Set verrouillagex
     *
     * @param integer $verrouillagex
     *
     * @return DocumentsObjets
     */
    public function setVerrouillagex($verrouillagex)
    {
        $this->verrouillagex = $verrouillagex;

        return $this;
    }

    /**
     * Get verrouillagex
     *
     * @return integer
     */
    public function getVerrouillagex()
    {
        return $this->verrouillagex;
    }

    /**
     * Set verrouillagey
     *
     * @param integer $verrouillagey
     *
     * @return DocumentsObjets
     */
    public function setVerrouillagey($verrouillagey)
    {
        $this->verrouillagey = $verrouillagey;

        return $this;
    }

    /**
     * Get verrouillagey
     *
     * @return integer
     */
    public function getVerrouillagey()
    {
        return $this->verrouillagey;
    }

    /**
     * Set xmodifiable
     *
     * @param integer $xmodifiable
     *
     * @return DocumentsObjets
     */
    public function setXmodifiable($xmodifiable)
    {
        $this->xmodifiable = $xmodifiable;

        return $this;
    }

    /**
     * Get xmodifiable
     *
     * @return integer
     */
    public function getXmodifiable()
    {
        return $this->xmodifiable;
    }

    /**
     * Set ymodifiable
     *
     * @param integer $ymodifiable
     *
     * @return DocumentsObjets
     */
    public function setYmodifiable($ymodifiable)
    {
        $this->ymodifiable = $ymodifiable;

        return $this;
    }

    /**
     * Get ymodifiable
     *
     * @return integer
     */
    public function getYmodifiable()
    {
        return $this->ymodifiable;
    }

    /**
     * Set largeur
     *
     * @param integer $largeur
     *
     * @return DocumentsObjets
     */
    public function setLargeur($largeur)
    {
        $this->largeur = $largeur;

        return $this;
    }

    /**
     * Get largeur
     *
     * @return integer
     */
    public function getLargeur()
    {
        return $this->largeur;
    }

    /**
     * Set hauteur
     *
     * @param integer $hauteur
     *
     * @return DocumentsObjets
     */
    public function setHauteur($hauteur)
    {
        $this->hauteur = $hauteur;

        return $this;
    }

    /**
     * Get hauteur
     *
     * @return integer
     */
    public function getHauteur()
    {
        return $this->hauteur;
    }

    /**
     * Set largeurmodifiable
     *
     * @param integer $largeurmodifiable
     *
     * @return DocumentsObjets
     */
    public function setLargeurmodifiable($largeurmodifiable)
    {
        $this->largeurmodifiable = $largeurmodifiable;

        return $this;
    }

    /**
     * Get largeurmodifiable
     *
     * @return integer
     */
    public function getLargeurmodifiable()
    {
        return $this->largeurmodifiable;
    }

    /**
     * Set hauteurmodifiable
     *
     * @param integer $hauteurmodifiable
     *
     * @return DocumentsObjets
     */
    public function setHauteurmodifiable($hauteurmodifiable)
    {
        $this->hauteurmodifiable = $hauteurmodifiable;

        return $this;
    }

    /**
     * Get hauteurmodifiable
     *
     * @return integer
     */
    public function getHauteurmodifiable()
    {
        return $this->hauteurmodifiable;
    }

    /**
     * Set largeurmin
     *
     * @param integer $largeurmin
     *
     * @return DocumentsObjets
     */
    public function setLargeurmin($largeurmin)
    {
        $this->largeurmin = $largeurmin;

        return $this;
    }

    /**
     * Get largeurmin
     *
     * @return integer
     */
    public function getLargeurmin()
    {
        return $this->largeurmin;
    }

    /**
     * Set largeurmax
     *
     * @param integer $largeurmax
     *
     * @return DocumentsObjets
     */
    public function setLargeurmax($largeurmax)
    {
        $this->largeurmax = $largeurmax;

        return $this;
    }

    /**
     * Get largeurmax
     *
     * @return integer
     */
    public function getLargeurmax()
    {
        return $this->largeurmax;
    }

    /**
     * Set hauteurmin
     *
     * @param integer $hauteurmin
     *
     * @return DocumentsObjets
     */
    public function setHauteurmin($hauteurmin)
    {
        $this->hauteurmin = $hauteurmin;

        return $this;
    }

    /**
     * Get hauteurmin
     *
     * @return integer
     */
    public function getHauteurmin()
    {
        return $this->hauteurmin;
    }

    /**
     * Set hauteurmax
     *
     * @param integer $hauteurmax
     *
     * @return DocumentsObjets
     */
    public function setHauteurmax($hauteurmax)
    {
        $this->hauteurmax = $hauteurmax;

        return $this;
    }

    /**
     * Get hauteurmax
     *
     * @return integer
     */
    public function getHauteurmax()
    {
        return $this->hauteurmax;
    }

    /**
     * Set verrouillagelargeur
     *
     * @param integer $verrouillagelargeur
     *
     * @return DocumentsObjets
     */
    public function setVerrouillagelargeur($verrouillagelargeur)
    {
        $this->verrouillagelargeur = $verrouillagelargeur;

        return $this;
    }

    /**
     * Get verrouillagelargeur
     *
     * @return integer
     */
    public function getVerrouillagelargeur()
    {
        return $this->verrouillagelargeur;
    }

    /**
     * Set verrouillagehauteur
     *
     * @param integer $verrouillagehauteur
     *
     * @return DocumentsObjets
     */
    public function setVerrouillagehauteur($verrouillagehauteur)
    {
        $this->verrouillagehauteur = $verrouillagehauteur;

        return $this;
    }

    /**
     * Get verrouillagehauteur
     *
     * @return integer
     */
    public function getVerrouillagehauteur()
    {
        return $this->verrouillagehauteur;
    }

    /**
     * Set verrouillageproportions
     *
     * @param integer $verrouillageproportions
     *
     * @return DocumentsObjets
     */
    public function setVerrouillageproportions($verrouillageproportions)
    {
        $this->verrouillageproportions = $verrouillageproportions;

        return $this;
    }

    /**
     * Get verrouillageproportions
     *
     * @return integer
     */
    public function getVerrouillageproportions()
    {
        return $this->verrouillageproportions;
    }

    /**
     * Set interditmodifproportions
     *
     * @param integer $interditmodifproportions
     *
     * @return DocumentsObjets
     */
    public function setInterditmodifproportions($interditmodifproportions)
    {
        $this->interditmodifproportions = $interditmodifproportions;

        return $this;
    }

    /**
     * Get interditmodifproportions
     *
     * @return integer
     */
    public function getInterditmodifproportions()
    {
        return $this->interditmodifproportions;
    }

    /**
     * Set couleurtrait
     *
     * @param string $couleurtrait
     *
     * @return DocumentsObjets
     */
    public function setCouleurtrait($couleurtrait)
    {
        $this->couleurtrait = $couleurtrait;

        return $this;
    }

    /**
     * Get couleurtrait
     *
     * @return string
     */
    public function getCouleurtrait()
    {
        return $this->couleurtrait;
    }

    /**
     * Set styletrait
     *
     * @param string $styletrait
     *
     * @return DocumentsObjets
     */
    public function setStyletrait($styletrait)
    {
        $this->styletrait = $styletrait;

        return $this;
    }

    /**
     * Get styletrait
     *
     * @return string
     */
    public function getStyletrait()
    {
        return $this->styletrait;
    }

    /**
     * Set epaisstrait
     *
     * @param float $epaisstrait
     *
     * @return DocumentsObjets
     */
    public function setEpaisstrait($epaisstrait)
    {
        $this->epaisstrait = $epaisstrait;

        return $this;
    }

    /**
     * Get epaisstrait
     *
     * @return float
     */
    public function getEpaisstrait()
    {
        return $this->epaisstrait;
    }

    /**
     * Set coulremplis
     *
     * @param string $coulremplis
     *
     * @return DocumentsObjets
     */
    public function setCoulremplis($coulremplis)
    {
        $this->coulremplis = $coulremplis;

        return $this;
    }

    /**
     * Get coulremplis
     *
     * @return string
     */
    public function getCoulremplis()
    {
        return $this->coulremplis;
    }

    /**
     * Set styleremplis
     *
     * @param string $styleremplis
     *
     * @return DocumentsObjets
     */
    public function setStyleremplis($styleremplis)
    {
        $this->styleremplis = $styleremplis;

        return $this;
    }

    /**
     * Get styleremplis
     *
     * @return string
     */
    public function getStyleremplis()
    {
        return $this->styleremplis;
    }

    /**
     * Set couleurtexte
     *
     * @param string $couleurtexte
     *
     * @return DocumentsObjets
     */
    public function setCouleurtexte($couleurtexte)
    {
        $this->couleurtexte = $couleurtexte;

        return $this;
    }

    /**
     * Get couleurtexte
     *
     * @return string
     */
    public function getCouleurtexte()
    {
        return $this->couleurtexte;
    }

    /**
     * Set couleurfond
     *
     * @param string $couleurfond
     *
     * @return DocumentsObjets
     */
    public function setCouleurfond($couleurfond)
    {
        $this->couleurfond = $couleurfond;

        return $this;
    }

    /**
     * Get couleurfond
     *
     * @return string
     */
    public function getCouleurfond()
    {
        return $this->couleurfond;
    }

    /**
     * Set padding
     *
     * @param float $padding
     *
     * @return DocumentsObjets
     */
    public function setPadding($padding)
    {
        $this->padding = $padding;

        return $this;
    }

    /**
     * Get padding
     *
     * @return float
     */
    public function getPadding()
    {
        return $this->padding;
    }

    /**
     * Set interligne
     *
     * @param float $interligne
     *
     * @return DocumentsObjets
     */
    public function setInterligne($interligne)
    {
        $this->interligne = $interligne;

        return $this;
    }

    /**
     * Get interligne
     *
     * @return float
     */
    public function getInterligne()
    {
        return $this->interligne;
    }

    /**
     * Set taillepolice
     *
     * @param integer $taillepolice
     *
     * @return DocumentsObjets
     */
    public function setTaillepolice($taillepolice)
    {
        $this->taillepolice = $taillepolice;

        return $this;
    }

    /**
     * Get taillepolice
     *
     * @return integer
     */
    public function getTaillepolice()
    {
        return $this->taillepolice;
    }

    /**
     * Set nompolice
     *
     * @param string $nompolice
     *
     * @return DocumentsObjets
     */
    public function setNompolice($nompolice)
    {
        $this->nompolice = $nompolice;

        return $this;
    }

    /**
     * Get nompolice
     *
     * @return string
     */
    public function getNompolice()
    {
        return $this->nompolice;
    }

    /**
     * Set familypolice
     *
     * @param integer $familypolice
     *
     * @return DocumentsObjets
     */
    public function setFamilypolice($familypolice)
    {
        $this->familypolice = $familypolice;

        return $this;
    }

    /**
     * Get familypolice
     *
     * @return integer
     */
    public function getFamilypolice()
    {
        return $this->familypolice;
    }

    /**
     * Set stylepolice
     *
     * @param integer $stylepolice
     *
     * @return DocumentsObjets
     */
    public function setStylepolice($stylepolice)
    {
        $this->stylepolice = $stylepolice;

        return $this;
    }

    /**
     * Get stylepolice
     *
     * @return integer
     */
    public function getStylepolice()
    {
        return $this->stylepolice;
    }

    /**
     * Set weightpolice
     *
     * @param integer $weightpolice
     *
     * @return DocumentsObjets
     */
    public function setWeightpolice($weightpolice)
    {
        $this->weightpolice = $weightpolice;

        return $this;
    }

    /**
     * Get weightpolice
     *
     * @return integer
     */
    public function getWeightpolice()
    {
        return $this->weightpolice;
    }

    /**
     * Set soulignepolice
     *
     * @param integer $soulignepolice
     *
     * @return DocumentsObjets
     */
    public function setSoulignepolice($soulignepolice)
    {
        $this->soulignepolice = $soulignepolice;

        return $this;
    }

    /**
     * Get soulignepolice
     *
     * @return integer
     */
    public function getSoulignepolice()
    {
        return $this->soulignepolice;
    }

    /**
     * Set alignement
     *
     * @param string $alignement
     *
     * @return DocumentsObjets
     */
    public function setAlignement($alignement)
    {
        $this->alignement = $alignement;

        return $this;
    }

    /**
     * Get alignement
     *
     * @return string
     */
    public function getAlignement()
    {
        return $this->alignement;
    }

    /**
     * Set largeurtexte
     *
     * @param integer $largeurtexte
     *
     * @return DocumentsObjets
     */
    public function setLargeurtexte($largeurtexte)
    {
        $this->largeurtexte = $largeurtexte;

        return $this;
    }

    /**
     * Get largeurtexte
     *
     * @return integer
     */
    public function getLargeurtexte()
    {
        return $this->largeurtexte;
    }

    /**
     * Set norme
     *
     * @param string $norme
     *
     * @return DocumentsObjets
     */
    public function setNorme($norme)
    {
        $this->norme = $norme;

        return $this;
    }

    /**
     * Get norme
     *
     * @return string
     */
    public function getNorme()
    {
        return $this->norme;
    }

    /**
     * Set affichenumero
     *
     * @param integer $affichenumero
     *
     * @return DocumentsObjets
     */
    public function setAffichenumero($affichenumero)
    {
        $this->affichenumero = $affichenumero;

        return $this;
    }

    /**
     * Get affichenumero
     *
     * @return integer
     */
    public function getAffichenumero()
    {
        return $this->affichenumero;
    }
}
