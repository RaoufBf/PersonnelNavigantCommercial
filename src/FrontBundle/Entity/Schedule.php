<?php

namespace FrontBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Schedule
 *
 * @ORM\Table(name="schedule")
 * @ORM\Entity(repositoryClass="FrontBundle\Repository\ScheduleRepository")
 */
class Schedule
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var boolean
     *
     * @ORM\Column(name="allDay", type="boolean")
     */
    private $allDay = true;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start", type="datetime")
     */
    private $start;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end", type="datetime")
     */
    private $end;

    /**
     * @var string
     *
     * @ORM\Column(name="edepart", type="string", length=255)
     */

    private $edepart;

    /**
     * @var string
     *
     * @ORM\Column(name="earrive", type="string", length=255)
     */

    private $earrive;


    /**
     * @var string
     *
     * @ORM\Column(name="numVole", type="string", length=255)
     */

    private $numVole;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="matPnc",referencedColumnName="id")
     */
    private $matPnc;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Schedule
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set allDay
     *
     * @param boolean $allDay
     *
     * @return Schedule
     */
    public function setAllDay($allDay)
    {
        $this->allDay = $allDay;

        return $this;
    }

    /**
     * Get allDay
     *
     * @return boolean
     */
    public function getAllDay()
    {
        return $this->allDay;
    }

    /**
     * Set start
     *
     * @param \DateTime $start
     *
     * @return Schedule
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Get start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set end
     *
     * @param \DateTime $end
     *
     * @return Schedule
     */
    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Get end
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Set edepart
     *
     * @param string $edepart
     *
     * @return Schedule
     */
    public function setEdepart($edepart)
    {
        $this->edepart = $edepart;

        return $this;
    }

    /**
     * Get edepart
     *
     * @return string
     */
    public function getEdepart()
    {
        return $this->edepart;
    }

    /**
     * Set earrive
     *
     * @param string $earrive
     *
     * @return Schedule
     */
    public function setEarrive($earrive)
    {
        $this->earrive = $earrive;

        return $this;
    }

    /**
     * Get earrive
     *
     * @return string
     */
    public function getEarrive()
    {
        return $this->earrive;
    }

    /**
     * Set numVole
     *
     * @param string $numVole
     *
     * @return Schedule
     */
    public function setNumVole($numVole)
    {
        $this->numVole = $numVole;

        return $this;
    }

    /**
     * Get numVole
     *
     * @return string
     */
    public function getNumVole()
    {
        return $this->numVole;
    }

    /**
     * Set matPnc
     *
     * @param \FrontBundle\Entity\pnc $matPnc
     *
     * @return Schedule
     */
    public function setMatPnc(\AppBundle\Entity\pnc $matPnc = null)
    {
        $this->matPnc = $matPnc;

        return $this;
    }

    /**
     * Get matPnc
     *
     * @return \FrontBundle\Entity\pnc
     */
    public function getMatPnc()
    {
        return $this->matPnc;
    }
}
