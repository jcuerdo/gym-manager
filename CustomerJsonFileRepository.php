<?php

include_once "CustomerRepository.php";

class CustomerJsonFileRepository implements CustomerRepository {

    const FILENAME = './customers.json';


    public function loadCustomers()
    {
        $customers = [];
        $fileContent = file_get_contents(self::FILENAME);
        $customersJson = json_decode($fileContent, true);

        foreach ($customersJson as $customerJson){
            $customers[] = new Customer(
                $customerJson['name'],
                $customerJson['dni'],
                new DateTime("@{$customerJson['date']}"),
                $customerJson['active'],
                $customerJson['rate']
            );
        }
        return $customers;
    }

    public function loadCustomer($dni)
    {
        $fileContent = file_get_contents(self::FILENAME);
        $customersJson = json_decode($fileContent, true);

        foreach ($customersJson as $customerJson){
            if($customerJson['dni'] == $dni){
                return new Customer(
                    $customerJson['name'],
                    $customerJson['dni'],
                    new DateTime("@{$customerJson['date']}"),
                    $customerJson['active'],
                    $customerJson['rate']
                );
            }
        }
        return null;
    }

    public function saveCustomer(Customer $customer)
    {
        $fileContent = file_get_contents(self::FILENAME);
        $customersJson = json_decode($fileContent, true);

        $customerJson = [
            'name' => $customer->getName(),
            'dni'  => $customer->getDni(),
            'date' => $customer->getDate()->getTimestamp(),
            'rate' => $customer->getRate(),
            'active' => $customer->isActive(),
            ];

        $customersJson[] = $customerJson;

        file_put_contents(self::FILENAME, json_encode($customersJson));
    }

    public function deleteCustomer($dni)
    {
        $fileContent = file_get_contents(self::FILENAME);
        $customersJson = json_decode($fileContent, true);

        foreach ($customersJson as $key => $customerJson){
            if ($dni == $customerJson['dni']) {
                unset($customersJson[$key]);
            }
        }
        file_put_contents(self::FILENAME, json_encode($customersJson));
    }

    public function editCustomer(Customer $customer)
    {
        $fileContent = file_get_contents(self::FILENAME);
        $customersJson = json_decode($fileContent, true);

        foreach ($customersJson as $key => $customerJson){
            if ($customer->getDni() == $customerJson['dni']) {
                $customersJson[$key] = [
                    'name' => $customer->getName(),
                    'dni'  => $customer->getDni(),
                    'date' => $customer->getDate()->getTimestamp(),
                    'rate' => $customer->getRate(),
                    'active' => $customer->isActive(),
                ];
            }
        }
        file_put_contents(self::FILENAME, json_encode($customersJson));    }
}