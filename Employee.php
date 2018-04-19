<?php

class Employee extends Person
{

    public function __construct($name, $dni, $date)
    {
        parent::__construct($name, $dni, $date);
    }
}