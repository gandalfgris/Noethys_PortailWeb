<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestionnaireChoix
 *
 * @ORM\Table(name="questionnaire_choix", indexes={@ORM\Index(name="IDquestion", columns={"IDquestion"})})
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



    /**
     * Get idchoix
     *
     * @return integer
     */
    public function getIdchoix()
    {
        return $this->idchoix;
    }

    /**
     * Set idquestion
     *
     * @param integer $idquestion
     *
     * @return QuestionnaireChoix
     */
    public function setIdquestion($idquestion)
    {
        $this->idquestion = $idquestion;

        return $this;
    }

    /**
     * Get idquestion
     *
     * @return integer
     */
    public function getIdquestion()
    {
        return $this->idquestion;
    }

    /**
     * Set ordre
     *
     * @param integer $ordre
     *
     * @return QuestionnaireChoix
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
     * Set visible
     *
     * @param integer $visible
     *
     * @return QuestionnaireChoix
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return integer
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Set label
     *
     * @param string $label
     *
     * @return QuestionnaireChoix
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }
}
