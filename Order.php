<?php

class Order
{
    /**
     * @var string
     */
    private $id;

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

    public function __construct(Product $product, Customer $customer, Employee $employee, $sellPrice, $id = null, $comment = "")
    {
        $this->product = $product;
        $this->customer = $customer;
        $this->employee = $employee;
        $this->sellPrice = $sellPrice;
        $this->comment = $comment;

        if ($id === null) {
           $this->id = uniqid();
        } else {
            $this->id = $id;
        }
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

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    public function __toString()
    {
        return sprintf("ID: %s Product: %s , Client: %s, Final price: %s", $this->getId(), $this->product->getName(), $this->customer, $this->getSellPrice());
    }


}