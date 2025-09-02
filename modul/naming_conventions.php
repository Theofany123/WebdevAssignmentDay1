<?php
declare(strict_types=1);
namespace App;
echo "Hello World\n";
echo "Hello World (short syntax)\n";

class Product
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

$firstName = 'Mike'; 

function updateProduct(): void 
{
    echo "Product updated!\n";
}

class ProductItem
{
    public function __construct()
    {
        echo "ProductItem created!\n";
    }
}

const ACCESS_KEY = '123abc'; 
updateProduct();
$item = new ProductItem();
$product = new Product("Laptop");
echo "Name from Product class: {$product->name}\n";
echo "First name: $firstName\n";
echo "Access key: " . ACCESS_KEY . "\n";
