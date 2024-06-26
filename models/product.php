<?php
require_once __DIR__ . '/categories.php';

class Product
{
    // VARIABILI D'ISTANZA
    protected string $title;
    protected int $price;
    protected Categories $categories;

    // CONSTRUCT
    public function __construct(string $title, int $price, Categories $categories)
    {
        $this->title = $title;
        $this->price = $price;
        $this->categories = $categories;
    }

    // FUNCTION GET
    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getCategory(): Categories
    {
        return $this->categories;
    }
}
