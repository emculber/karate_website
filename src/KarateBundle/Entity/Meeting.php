<?php

namespace KarateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Meeting
 *
 * @ORM\Table(name="meeting", indexes={@ORM\Index(name="IDX_F515E1398C4FC193", columns={"instructor_id"}), @ORM\Index(name="IDX_F515E1391E5D0459", columns={"test_id"})})
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
     * @var integer
     *
     * @ORM\Column(name="class_id", type="integer", nullable=true)
     */
    private $classId;

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
     * @var \TestClass
     *
     * @ORM\ManyToOne(targetEntity="TestClass")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="test_id", referencedColumnName="test_class_id")
     * })
     */
    private $test;



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
     * Set classId
     *
     * @param integer $classId
     *
     * @return Meeting
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
     * Set test
     *
     * @param \KarateBundle\Entity\TestClass $test
     *
     * @return Meeting
     */
    public function setTest(\KarateBundle\Entity\TestClass $test = null)
    {
        $this->test = $test;

        return $this;
    }

    /**
     * Get test
     *
     * @return \KarateBundle\Entity\TestClass
     */
    public function getTest()
    {
        return $this->test;
    }
}
