<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateurs
 *
 * @ORM\Table(name="utilisateurs")
 * @ORM\Entity
 */
class Utilisateurs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDutilisateur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idutilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=5, nullable=true)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=200, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=200, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=100, nullable=true)
     */
    private $mdp;

    /**
     * @var string
     *
     * @ORM\Column(name="profil", type="string", length=100, nullable=true)
     */
    private $profil;

    /**
     * @var integer
     *
     * @ORM\Column(name="actif", type="integer", nullable=true)
     */
    private $actif;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=200, nullable=true)
     */
    private $image;


}

