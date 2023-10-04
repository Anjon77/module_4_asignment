<?php

class Product {
    // TODO: Add properties
    public int $productId;
    public string $name;
    public float $price;

    
    public function __construct($id, $name, $price) {
        // TODO: Initialize properties
        $this->productId = $id;
        $this->name = $name;
        $this->price = $price;
       
    }


    // TODO: Add getFormattedPrice method
    public function getFormattedPrice() {
        // TODO: Return formatted price
        return number_format($this->price, 2);  
    }


    // TODO: Add showDetails method
    public function showDetails() { 
        // TODO: Show product details
        echo "Product ID: ". $this->productId. "\n";
        echo "Name: ". $this->name. "\n";
        echo "Price: ". $this->getFormattedPrice(). "\n";
        return; 
        
    }
}


// Test the Product class
// $product = new Product(1, 'T-shirt', 19.99);
$product = new Product(1, 'T-shirt', 179.99);
$product = new Product(2, 'T-shirt', 279.99);
$product->showDetails();
$product->showDetails();



/* Expected Output:


Product Details:
- ID: 1
- Name: T-shirt
- Price: $19.99
 */
