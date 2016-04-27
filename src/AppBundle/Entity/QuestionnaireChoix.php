<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestionnaireChoix
 *
 * @ORM\Table(name="questionnaire_choix")
 * @ORM\Entity
 */
class QuestionnaireChoix
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDchoix", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idchoix;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDquestion", type="integer", nullable=true)
     */
    private $idquestion;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordre", type="integer", nullable=true)
     */
    private $ordre;

    /**
     * @var integer
     *
     * @ORM\Column(name="visible", type="integer", nullable=true)
     */
    private $visible;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="text", length=65535, nullable=true)
     */
    private $label;


}

