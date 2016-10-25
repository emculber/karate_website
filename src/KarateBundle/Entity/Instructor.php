<?php

namespace KarateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Instructor
 *
 * @ORM\Table(name="instructor", indexes={@ORM\Index(name="IDX_31FC43DDF8E3ADFE", columns={"belt_id"})})
 * @ORM\Entity
 */
class Instructor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="instructor_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="instructor_instructor_id_seq", allocationSize=1, initialValue=1)
     */
    private $instructorId;

    /**
     * @var string
     *
     * @ORM\Column(name="fname", type="string", length=30, nullable=true)
     */
    private $fname;

    /**
     * @var string
     *
     * @ORM\Column(name="lname", type="string", length=30, nullable=true)
     */
    private $lname;

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
     * Get instructorId
     *
     * @return integer
     */
    public function getInstructorId()
    {
        return $this->instructorId;
    }

    /**
     * Set fname
     *
     * @param string $fname
     *
     * @return Instructor
     */
    public function setFname($fname)
    {
        $this->fname = $fname;

        return $this;
    }

    /**
     * Get fname
     *
     * @return string
     */
    public function getFname()
    {
        return $this->fname;
    }

    /**
     * Set lname
     *
     * @param string $lname
     *
     * @return Instructor
     */
    public function setLname($lname)
    {
        $this->lname = $lname;

        return $this;
    }

    /**
     * Get lname
     *
     * @return string
     */
    public function getLname()
    {
        return $this->lname;
    }

    /**
     * Set belt
     *
     * @param \KarateBundle\Entity\Belt $belt
     *
     * @return Instructor
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
