<?php

class Order
{
    /**
     * @var Product
     */
    private $product;

    /**
     * @var Customer
     */
    private $customer;

    /**
     * @var Employee
     */
    private $employee;

    /**
     * @var float
     */
    private $sellPrice;

    /**
     * @var string
     */
    private $comment;

    public function __construct(Product $product, Customer $customer, Employee $employee, $sellPrice, $comment = "")
    {
        $this->product = $product;
        $this->customer = $customer;
        $this->employee = $employee;
        $this->sellPrice = $sellPrice;
        $this->comment = $comment;
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @return Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @return Employee
     */
    public function getEmployee()
    {
        return $this->employee;
    }

    /**
     * @return mixed
     */
    public function getSellPrice()
    {
        return $this->sellPrice;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    public function __toString()
    {
        return sprintf("Product: %s , Client: %s, Final price: %s", $this->product->getName(), $this->customer, $this->getSellPrice());
    }


}