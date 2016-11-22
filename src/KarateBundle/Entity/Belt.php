<?php

namespace KarateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Belt
 *
 * @ORM\Table(name="belt", indexes={@ORM\Index(name="IDX_605778D15FB14BA7", columns={"level_id"})})
 * @ORM\Entity
 */
class Belt
{
    /**
     * @var integer
     *
     * @ORM\Column(name="belt_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="belt_belt_id_seq", allocationSize=1, initialValue=1)
     */
    private $beltId;

    /**
     * @var string
     *
     * @ORM\Column(name="belt_title", type="string", length=155, nullable=true)
     */
    private $beltTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="belt_description", type="string", length=255, nullable=true)
     */
    private $beltDescription;

    /**
     * @var \Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="level_id", referencedColumnName="id")
     * })
     */
    private $level;



    /**
     * Get beltId
     *
     * @return integer
     */
    public function getBeltId()
    {
        return $this->beltId;
    }

    /**
     * Set beltTitle
     *
     * @param string $beltTitle
     *
     * @return Belt
     */
    public function setBelt($beltTitle)
    {
        $this->beltTitle = $beltTitle;

        return $this;
    }

    /**
     * Get beltTitle
     *
     * @return string
     */
    public function getBelt()
    {
        return $this->beltTitle;
    }

    /**
     * Set beltDescription
     *
     * @param string $beltDescription
     *
     * @return Belt
     */
    public function setBeltDescription($beltDescription)
    {
        $this->beltDescription = $beltDescription;

        return $this;
    }

    /**
     * Get beltDescription
     *
     * @return string
     */
    public function getBeltDescription()
    {
        return $this->beltDescription;
    }

    /**
     * Set level
     *
     * @param \KarateBundle\Entity\Level $level
     *
     * @return Belt
     */
    public function setLevel(\KarateBundle\Entity\Level $level = null)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return \KarateBundle\Entity\Level
     */
    public function getLevel()
    {
        return $this->level;
    }
}
