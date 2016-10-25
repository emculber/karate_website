<?php

namespace KarateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Level
 *
 * @ORM\Table(name="level")
 * @ORM\Entity
 */
class Level
{
    /**
     * @var string
     *
     * @ORM\Column(name="level", type="string", length=50, nullable=true)
     */
    private $level;

    /**
     * @var \Belt
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Belt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="belt_id", referencedColumnName="belt_id")
     * })
     */
    private $belt;



    /**
     * Set level
     *
     * @param string $level
     *
     * @return Level
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set belt
     *
     * @param \KarateBundle\Entity\Belt $belt
     *
     * @return Level
     */
    public function setBelt(\KarateBundle\Entity\Belt $belt)
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
