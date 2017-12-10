<?php

namespace backBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * actualite
 *
 * @ORM\Table(name="actualite")
 * @ORM\Entity(repositoryClass="backBundle\Repository\actualiteRepository")
 */
class actualite
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateofcration", type="datetime")
     */
    private $dateofcration;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text")
     */
    private $text;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return actualite
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set dateofcration
     *
     * @param \DateTime $dateofcration
     *
     * @return actualite
     */
    public function setDateofcration($dateofcration)
    {
        $this->dateofcration = $dateofcration;

        return $this;
    }

    /**
     * Get dateofcration
     *
     * @return \DateTime
     */
    public function getDateofcration()
    {
        return $this->dateofcration;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return actualite
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }
}

