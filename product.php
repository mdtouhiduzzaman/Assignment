<?php
class Product {
    // Add properties
    private $id;
    private $name;
    private $price;

    // Initialize properties
    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    // Method to get the formatted price
    public function getFormattedPrice() {
        return '$' . number_format($this->price, 2);
    }

    // Method to show product details
    public function showDetails() {
        echo "Product Details:\n";
        echo "- ID: {$this->id}\n";
        echo "- Name: {$this->name}\n";
        echo "- Price: {$this->getFormattedPrice()}\n";
    }
}

// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();
