<?php

namespace AppBundle\Entity;

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


}

