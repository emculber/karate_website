<?php

namespace KarateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TestClass
 *
 * @ORM\Table(name="test_class")
 * @ORM\Entity
 */
class TestClass
{
    /**
     * @var integer
     *
     * @ORM\Column(name="test_class_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="test_class_test_class_id_seq", allocationSize=1, initialValue=1)
     */
    private $testClassId;

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
     * @var string
     *
     * @ORM\Column(name="test_description", type="string", length=255, nullable=true)
     */
    private $testDescription;



    /**
     * Get testClassId
     *
     * @return integer
     */
    public function getTestClassId()
    {
        return $this->testClassId;
    }

    /**
     * Set classId
     *
     * @param integer $classId
     *
     * @return TestClass
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
     * @return TestClass
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
     * @return TestClass
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
     * Set testDescription
     *
     * @param string $testDescription
     *
     * @return TestClass
     */
    public function setTestDescription($testDescription)
    {
        $this->testDescription = $testDescription;

        return $this;
    }

    /**
     * Get testDescription
     *
     * @return string
     */
    public function getTestDescription()
    {
        return $this->testDescription;
    }
}
