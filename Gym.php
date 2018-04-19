<?php

class Gym
{
    /**
     * @var Customer[]
     */
    private $customers;

    /**
     * @var Product[]
     */
    private $products;

    /**
     * @var Order[]
     */
    private $orders;

    private $employees = [];

    public function __construct()
    {
        $this->customers = [];
        $this->products = [];
        $this->orders = [];
        $this->employees = [];
    }

    public function addCustomer(Customer $customer) {
        $this->customers[] = $customer;
    }

    public function addProduct(Product $product) {
        $this->products[] = $product;
    }

    public function addOrders(Order $order) {
        $this->orders[] = $order;
    }

    public function addEmployee(Employee $employee) {
        $this->employees[] = $employee;
    }

    /**
     * @return Customer[]
     */
    public function getCustomers()
    {
        return $this->customers;
    }

    /**
     * @return Product[]
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @return Order[]
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * @return array
     */
    public function getEmployees()
    {
        return $this->employees;
    }
}

