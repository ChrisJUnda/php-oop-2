<?php
require_once __DIR__ . '/product.php';

class Toy extends Product
{
    public function __construct(string $title, int $price, Categories $categories)
    {
        parent::__construct($title, $price, $categories, "Toy");
    }
}
