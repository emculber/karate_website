<?php

namespace KarateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WeaponClass
 *
 * @ORM\Table(name="weapon_class")
 * @ORM\Entity
 */
class WeaponClass
{
    /**
     * @var integer
     *
     * @ORM\Column(name="weponds_class_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="weapon_class_weponds_class_id_seq", allocationSize=1, initialValue=1)
     */
    private $wepondsClassId;

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
     * @var integer
     *
     * @ORM\Column(name="age_group", type="integer", nullable=true)
     */
    private $ageGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="weapon_description", type="string", length=255, nullable=true)
     */
    private $weaponDescription;



    /**
     * Get wepondsClassId
     *
     * @return integer
     */
    public function getWepondsClassId()
    {
        return $this->wepondsClassId;
    }

    /**
     * Set classId
     *
     * @param integer $classId
     *
     * @return WeaponClass
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
     * @return WeaponClass
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
     * @return WeaponClass
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
     * Set ageGroup
     *
     * @param integer $ageGroup
     *
     * @return WeaponClass
     */
    public function setAgeGroup($ageGroup)
    {
        $this->ageGroup = $ageGroup;

        return $this;
    }

    /**
     * Get ageGroup
     *
     * @return integer
     */
    public function getAgeGroup()
    {
        return $this->ageGroup;
    }

    /**
     * Set weaponDescription
     *
     * @param string $weaponDescription
     *
     * @return WeaponClass
     */
    public function setWeaponDescription($weaponDescription)
    {
        $this->weaponDescription = $weaponDescription;

        return $this;
    }

    /**
     * Get weaponDescription
     *
     * @return string
     */
    public function getWeaponDescription()
    {
        return $this->weaponDescription;
    }
}
