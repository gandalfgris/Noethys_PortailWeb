<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComptesBancaires
 *
 * @ORM\Table(name="comptes_bancaires")
 * @ORM\Entity
 */
class ComptesBancaires
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDcompte", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcompte;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=50, nullable=true)
     */
    private $numero;

    /**
     * @var integer
     *
     * @ORM\Column(name="defaut", type="integer", nullable=true)
     */
    private $defaut;

    /**
     * @var string
     *
     * @ORM\Column(name="raison", type="text", length=65535, nullable=true)
     */
    private $raison;

    /**
     * @var string
     *
     * @ORM\Column(name="code_etab", type="text", length=65535, nullable=true)
     */
    private $codeEtab;

    /**
     * @var string
     *
     * @ORM\Column(name="code_guichet", type="text", length=65535, nullable=true)
     */
    private $codeGuichet;

    /**
     * @var string
     *
     * @ORM\Column(name="code_nne", type="text", length=65535, nullable=true)
     */
    private $codeNne;

    /**
     * @var string
     *
     * @ORM\Column(name="cle_rib", type="text", length=65535, nullable=true)
     */
    private $cleRib;

    /**
     * @var string
     *
     * @ORM\Column(name="cle_iban", type="text", length=65535, nullable=true)
     */
    private $cleIban;

    /**
     * @var string
     *
     * @ORM\Column(name="iban", type="text", length=65535, nullable=true)
     */
    private $iban;

    /**
     * @var string
     *
     * @ORM\Column(name="bic", type="text", length=65535, nullable=true)
     */
    private $bic;

    /**
     * @var string
     *
     * @ORM\Column(name="code_ics", type="text", length=65535, nullable=true)
     */
    private $codeIcs;


}

