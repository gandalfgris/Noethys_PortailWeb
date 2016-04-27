<?php

namespace AppBundle\Entity;

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


}

