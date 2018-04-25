<?php

include_once "Gym.php";
include_once "Customer.php";
include_once "Employee.php";
include_once "Payment.php";
include_once "Product.php";
include_once "Order.php";
include_once "CustomerJsonFileRepository.php";
include_once "CustomerFakeLoaderRepository.php";

//Creating test gym
$gym = new Gym();

//We can instantiate the repository with CustomerJsonFileRepository or with CustomerFakeLoaderRepository
$customerRepository = new CustomerJsonFileRepository();
##$customerRepository = new CustomerFakeLoaderRepository();

//Testing editing
$customer = $customerRepository->loadCustomer('77777777G');
$customer->setName('Secundino');
$customer->activate();
$customerRepository->editCustomer($customer);


$customers = $customerRepository->loadCustomers();
//Adding to the gym
foreach ($customers as $customer){
    $gym->addCustomer($customer);
}

//Adding test payments
$customers[0]->addPayment(new Payment(new DateTime("now"), 50, $customers[0]));
$customers[0]->addPayment(new Payment(new DateTime("now -1 month"), 50, $customers[0]));
$customers[1]->addPayment(new Payment(new DateTime("now"), 50, $customers[1]));

//Creating one employee
$emp1 = new Employee('Popeye el marino', '12348-G', DateTime::createFromFormat('d-m-Y', '10-2-1987'));

//Add employee
$gym->addEmployee($emp1);

//Creatin some test products

$product1 = new Product("Pienso pa subir MyProtein", "12345-l", 100);
$product2 = new Product("Candao pa la taquilla", "7789-l", 5);

$gym->addProduct($product1);
$gym->addProduct($product2);

//Creating some test orders
$gym->addOrders(new Order($product1,$customers[0],$emp1,$product1->getPrice(),"001","El cliente ha solicitado bla bla bal"));
$gym->addOrders(new Order($product2,$customers[0],$emp1,$product2->getPrice()));
$gym->addOrders(new Order($product1,$customers[1],$emp1,$product2->getPrice()));


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


