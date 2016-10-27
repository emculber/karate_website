<?php

namespace KarateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormClass
 *
 * @ORM\Table(name="form_class", indexes={@ORM\Index(name="IDX_6E0CBD5CF8E3ADFE", columns={"belt_id"})})
 * @ORM\Entity
 */
class FormClass
{
    /**
     * @var integer
     *
     * @ORM\Column(name="form_class_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="form_class_form_class_id_seq", allocationSize=1, initialValue=1)
     */
    private $formClassId;

    /**
     * @var integer
     *
     * @ORM\Column(name="class_id", type="integer", nullable=false)
     */
    private $classId;

    /**
     * @var string
     *
     * @ORM\Column(name="class_name", type="string", length=30, nullable=true)
     */
    private $className;

    /**
     * @var string
     *
     * @ORM\Column(name="class_type", type="string", length=30, nullable=true)
     */
    private $classType;

    /**
     * @var \Belt
     *
     * @ORM\ManyToOne(targetEntity="Belt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="belt_id", referencedColumnName="belt_id")
     * })
     */
    private $belt;



    /**
     * Get formClassId
     *
     * @return integer
     */
    public function getFormClassId()
    {
        return $this->formClassId;
    }

    /**
     * Set classId
     *
     * @param integer $classId
     *
     * @return FormClass
     */
    public function setClassId($classId)
    {
        $this->classId = $classId;

        return $this;
    }

    /**
     * Get classId
     *
     * @return integer
     */
    public function getClassId()
    {
        return $this->classId;
    }

    /**
     * Set className
     *
     * @param string $className
     *
     * @return FormClass
     */
    public function setClassName($className)
    {
        $this->className = $className;

        return $this;
    }

    /**
     * Get className
     *
     * @return string
     */
    public function getClassName()
    {
        return $this->className;
    }

    /**
     * Set classType
     *
     * @param string $classType
     *
     * @return FormClass
     */
    public function setClassType($classType)
    {
        $this->classType = $classType;

        return $this;
    }

    /**
     * Get classType
     *
     * @return string
     */
    public function getClassType()
    {
        return $this->classType;
    }

    /**
     * Set belt
     *
     * @param \KarateBundle\Entity\Belt $belt
     *
     * @return FormClass
     */
    public function setBelt(\KarateBundle\Entity\Belt $belt = null)
    {
        $this->belt = $belt;

        return $this;
    }

    /**
     * Get belt
     *
     * @return \KarateBundle\Entity\Belt
     */
    public function getBelt()
    {
        return $this->belt;
    }
}
