<?php

include_once "CustomerRepository.php";

class CustomerFakeLoaderRepository implements CustomerRepository {

    const FILENAME = './customers.json';


    public function loadCustomers()
    {
        return [
            new Customer('Pepe', '77777777G', DateTime::createFromFormat('d-m-Y', '10-2-1987'),true,'JOVEN'),
            new Customer('Manolo', '8888888888L', DateTime::createFromFormat('d-m-Y', '05-06-1980'),true,'SENIOR')

        ];
    }

    public function loadCustomer($dni)
    {
        return new Customer('Pepe', '77777777G', DateTime::createFromFormat('d-m-Y', '10-2-1987'),true,'JOVEN');

    }

    public function saveCustomer(Customer $customer)
    {
        //Im a fake repository, i don't save nothing
    }

    public function deleteCustomer($dni)
    {
        //Im a fake repository, i don't delete nothing
    }

    public function editCustomer(Customer $customer)
    {
        //Im a fake repository, i don't edit nothing
    }
}