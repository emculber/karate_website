<?php

namespace KarateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Belt
 *
 * @ORM\Table(name="belt")
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
    public function setBeltTitle($beltTitle)
    {
        $this->beltTitle = $beltTitle;

        return $this;
    }

    /**
     * Get beltTitle
     *
     * @return string
     */
    public function getBeltTitle()
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
     * Get full
     *
     * @return string
     */
    public function getFullBelt()
    {
        return $this->beltTitle . " - " . $this->beltDescription;
    }
}
