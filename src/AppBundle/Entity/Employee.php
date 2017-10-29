<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employee
 *
 * @ORM\Table(name="employee")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EmployeeRepository")
 */
class Employee
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
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="middlename", type="string", length=255)
     */
    private $middlename;

    /**
     * @ORM\OneToMany(targetEntity="EntityPropertyValue", mappedBy="entity")
     */
    private $propertyValues;


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
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Employee
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Employee
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set middlename
     *
     * @param string $middlename
     *
     * @return Employee
     */
    public function setMiddlename($middlename)
    {
        $this->middlename = $middlename;

        return $this;
    }

    /**
     * Get middlename
     *
     * @return string
     */
    public function getMiddlename()
    {
        return $this->middlename;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->propertyValues = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add propertyValue
     *
     * @param \AppBundle\Entity\EntityPropertyValue $propertyValue
     *
     * @return Employee
     */
    public function addPropertyValue(\AppBundle\Entity\EntityPropertyValue $propertyValue)
    {
        $this->propertyValues[] = $propertyValue;

        return $this;
    }

    /**
     * Remove propertyValue
     *
     * @param \AppBundle\Entity\EntityPropertyValue $propertyValue
     */
    public function removePropertyValue(\AppBundle\Entity\EntityPropertyValue $propertyValue)
    {
        $this->propertyValues->removeElement($propertyValue);
    }

    /**
     * Get propertyValues
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPropertyValues()
    {
        return $this->propertyValues;
    }
}
