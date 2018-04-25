<?php

interface OrderRepository{
    public function loadOrders();
    public function loadOrder($id);
    public function saveOrder(Order $order);
    public function deleteOrder($id);
    public function editOrder(Order $order);
}