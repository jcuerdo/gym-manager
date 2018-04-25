<?php

interface ProductRepository{
    public function loadPayments();
    public function savePayment(Payment $payment);
    public function loadPaymentsByCustomer(Customer $customer);
}