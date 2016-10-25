<?php

namespace KarateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WeaponClass
 *
 * @ORM\Table(name="weapon_class", indexes={@ORM\Index(name="IDX_C0F1E9FA2EE82581F88B4253", columns={"weapons_id", "age_group"})})
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
     * @var \Weapons
     *
     * @ORM\ManyToOne(targetEntity="Weapons")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weapons_id", referencedColumnName="weaponds_id"),
     *   @ORM\JoinColumn(name="age_group", referencedColumnName="age_group")
     * })
     */
    private $weapons;



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
     * Set weapons
     *
     * @param \KarateBundle\Entity\Weapons $weapons
     *
     * @return WeaponClass
     */
    public function setWeapons(\KarateBundle\Entity\Weapons $weapons = null)
    {
        $this->weapons = $weapons;

        return $this;
    }

    /**
     * Get weapons
     *
     * @return \KarateBundle\Entity\Weapons
     */
    public function getWeapons()
    {
        return $this->weapons;
    }
}
