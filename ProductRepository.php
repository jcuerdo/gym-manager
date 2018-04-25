<?php

interface ProductRepository{
    public function loadProducts();
    public function loadProduct($sku);
    public function saveProduct(Product $product);
    public function deleteProduct($sku);
    public function editProduct(Product $product);
}