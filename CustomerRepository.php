<?php

interface CustomerRepository{
    public function loadCustomers();
    public function loadCustomer($dni);
    public function saveCustomer(Customer $customer);
    public function deleteCustomer($dni);
    public function editCustomer(Customer $customer);
}