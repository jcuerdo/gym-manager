<?php

class Person
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $dni;

    /**
     * @var DateTime
     */
    protected $date;


    public function __construct($name, $dni, DateTime $date)
    {
        $this->name = $name;
        $this->dni = $dni;
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    public function __toString()
    {
        return sprintf("Name: %s DNI: %s Date: %s ", $this->name, $this->dni, $this->date->format('d-m-Y'));
    }


}