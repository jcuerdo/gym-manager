<?php

class Product
{

    /**
     * @var string
     */
    private $sku;

    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $price;

    public function __construct($name, $sku, $price = 0)
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    public function __toString()
    {
        return sprintf("Product: SKU: %s, Name: %s, Price: %.2f", $this->sku, $this->name, $this->price);
    }
}