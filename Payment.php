<?php

class Payment
{
    /**
     * @var DateTime
     */
    private $date;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var Customer
     */
    private $customer;

    /**
     * Payment constructor.
     * @param DateTime $date
     * @param float $amount
     * @param Customer $customer
     */
    public function __construct(DateTime $date, $amount, Customer $customer)
    {
        $this->date = $date;
        $this->amount = $amount;
        $this->customer = $customer;
    }

    /**
     * @return DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }
}