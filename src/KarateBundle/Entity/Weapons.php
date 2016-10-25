<?php

namespace KarateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Weapons
 *
 * @ORM\Table(name="weapons")
 * @ORM\Entity
 */
class Weapons
{
    /**
     * @var integer
     *
     * @ORM\Column(name="weaponds_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $weapondsId;

    /**
     * @var integer
     *
     * @ORM\Column(name="age_group", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ageGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="weapon_description", type="string", length=255, nullable=true)
     */
    private $weaponDescription;



    /**
     * Set weapondsId
     *
     * @param integer $weapondsId
     *
     * @return Weapons
     */
    public function setWeapondsId($weapondsId)
    {
        $this->weapondsId = $weapondsId;

        return $this;
    }

    /**
     * Get weapondsId
     *
     * @return integer
     */
    public function getWeapondsId()
    {
        return $this->weapondsId;
    }

    /**
     * Set ageGroup
     *
     * @param integer $ageGroup
     *
     * @return Weapons
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
     * @return Weapons
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
