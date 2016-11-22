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
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="datetime", nullable=true)
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="datetime", nullable=true)
     */
    private $endDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="age_group", type="integer", nullable=true)
     */
    private $ageGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="weapon_desc", type="string", length=230, nullable=true)
     */
    private $weaponDesc;



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
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return WeaponClass
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return WeaponClass
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
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
     * Set weaponDesc
     *
     * @param string $weaponDesc
     *
     * @return WeaponClass
     */
    public function setWeaponDesc($weaponDesc)
    {
        $this->weaponDesc = $weaponDesc;

        return $this;
    }

    /**
     * Get weaponDesc
     *
     * @return string
     */
    public function getWeaponDesc()
    {
        return $this->weaponDesc;
    }
}
