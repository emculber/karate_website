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
