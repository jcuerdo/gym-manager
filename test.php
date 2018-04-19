<?php

include_once "Gym.php";
include_once "Customer.php";
include_once "Employee.php";
include_once "Payment.php";
include_once "Product.php";
include_once "Order.php";

//Creating test gym
$gym = new Gym();

//Creating test customers
$customer1 = new Customer('Manolo', '1234-G', DateTime::createFromFormat('d-m-Y', '15-04-1988'), true, 'JOVEN');
$customer2 = new Customer('Pepe', '1234-G', DateTime::createFromFormat('d-m-Y', '10-2-1987'), false, 'SENIOR');

//Adding to the gym
$gym->addCustomer($customer1);
$gym->addCustomer($customer2);

//Creating one employee
$emp1 = new Employee('Popeye el marino', '12348-G', DateTime::createFromFormat('d-m-Y', '10-2-1987'));

//Add employee
$gym->addEmployee($emp1);

//Adding test payments
$customer1->addPayment(new Payment(new DateTime("now"), 50, $customer1));
$customer1->addPayment(new Payment(new DateTime("now -1 month"), 50, $customer1));
$customer2->addPayment(new Payment(new DateTime("now"), 50, $customer2));


//Creatin some test products

$product1 = new Product("Pienso pa subir MyProtein", "12345-l", 100);
$product2 = new Product("Candao pa la taquilla", "7789-l", 5);

$gym->addProduct($product1);
$gym->addProduct($product2);

//Creating some test orders
$gym->addOrders(new Order($product1,$customer1,$emp1,$product1->getPrice(),"El cliente ha solicitado bla bla bal"));
$gym->addOrders(new Order($product2,$customer1,$emp1,$product2->getPrice()));
$gym->addOrders(new Order($product1,$customer2,$emp1,$product2->getPrice()));


//Now is time to show our gym:

echo "Our clients \n";
foreach ($gym->getCustomers() as $customer) {
    echo $customer . "\n";
}

echo "Our employees \n";
foreach ($gym->getEmployees() as $employee) {
    echo $employee . "\n";
}

echo "Our products \n";
foreach ($gym->getProducts() as $product) {
    echo $product . "\n";
}


echo "Last orders \n";
foreach ($gym->getOrders() as $order) {
    echo $order . "\n";
}




