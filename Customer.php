<?php

include_once "Person.php";

class Customer extends Person
{
    /**
     * @var bool
     */
    private $active;

    /**
     * @var string
     */
    private $rate;

    /**
     * @var Payment[]
     */
    private $payments;

    public function __construct($name, $dni, DateTime $date, $active = true, $rate = null)
    {
        parent::__construct($name, $dni, $date);

        $this->active = $active;
        $this->rate = $rate;
        $this->payments = [];
    }

    public function addPayment(Payment $payment) {
        $this->payments[] = $payment;
    }

    /**
     * @return Payment[]
     */
    public function getPayments()
    {
        return $this->payments;
    }

    /**
     * @return void
     */
    public function activate()
    {
        $this->active = true;
    }

    /**
     * @return void
     */
    public function deActivate()
    {
        $this->active = false;
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @return string
     */
    public function getRate()
    {
        return $this->rate;
    }

    public function __toString()
    {
        return parent::__toString() . sprintf(" Customer Data - Is Active: %s, Rate: %s  ", $this->active ? 'Yes' : 'No', $this->rate);
    }
}