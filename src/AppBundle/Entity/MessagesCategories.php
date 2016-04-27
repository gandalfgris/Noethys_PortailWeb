<?php

namespace AppBundle\Entity;

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


}

