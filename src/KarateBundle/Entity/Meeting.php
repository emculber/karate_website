<?php

namespace KarateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Meeting
 *
 * @ORM\Table(name="meeting", indexes={@ORM\Index(name="IDX_F515E1398C4FC193", columns={"instructor_id"}), @ORM\Index(name="IDX_F515E139EA000B10", columns={"class_id"})})
 * @ORM\Entity
 */
class Meeting
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="meeting_date", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $meetingDate;

    /**
     * @var \Instructor
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Instructor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="instructor_id", referencedColumnName="instructor_id")
     * })
     */
    private $instructor;

    /**
     * @var \ClassParent
     *
     * @ORM\ManyToOne(targetEntity="ClassParent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="class_id", referencedColumnName="class_id")
     * })
     */
    private $class;



    /**
     * Set meetingDate
     *
     * @param \DateTime $meetingDate
     *
     * @return Meeting
     */
    public function setMeetingDate($meetingDate)
    {
        $this->meetingDate = $meetingDate;

        return $this;
    }

    /**
     * Get meetingDate
     *
     * @return \DateTime
     */
    public function getMeetingDate()
    {
        return $this->meetingDate;
    }

    /**
     * Set instructor
     *
     * @param \KarateBundle\Entity\Instructor $instructor
     *
     * @return Meeting
     */
    public function setInstructor(\KarateBundle\Entity\Instructor $instructor)
    {
        $this->instructor = $instructor;

        return $this;
    }

    /**
     * Get instructor
     *
     * @return \KarateBundle\Entity\Instructor
     */
    public function getInstructor()
    {
        return $this->instructor;
    }

    /**
     * Set class
     *
     * @param \KarateBundle\Entity\ClassParent $class
     *
     * @return Meeting
     */
    public function setClass(\KarateBundle\Entity\ClassParent $class = null)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return \KarateBundle\Entity\ClassParent
     */
    public function getClass()
    {
        return $this->class;
    }
}
