<?php

// Interface
interface Factory{
    public function createSomething();
}

// Product Factory
class ProductOneFactory implements Factory{
    public function createSomething(){
        return new ProductOne();
    }
}

class ProductTwoFactory implements Factory{
    public function createSomething(){
        return new ProductTwo();
    }
}

interface Product{
    public function say();
}

// Product
class ProductOne{
    public function say(){
        return "Product One is about healthcare!";
    }
}

class ProductTwo{
    public function say(){
        return "Product Two is about food!";
    }
}


// Using the factory
function getProductDescription(Factory $factory){
    $product = $factory->createSomething();
    return $product->say();
}

echo getProductDescription(new ProductOneFactory());
echo getProductDescription(new ProductTwoFactory());



// example from GPT
// encapsulate better.
// the logic handling for type of car created, based on the factory.
// its just logic handling if else, but in class level

interface Car {
    public function drive();
}

// Concrete Products
class ElectricCar implements Car {
    public function drive() {
        return "Driving an electric car!";
    }
}

class GasCar implements Car {
    public function drive() {
        return "Driving a gas car!";
    }
}

// Factory
class CarFactory {
    public function createCar($type): Car {
        return match ($type) {
            "electric" => new ElectricCar(),
            "gas" => new GasCar(),
            default => throw new Exception("Invalid car type"),
        };
    }
}

// Using Factory
$factory = new CarFactory();
$car = $factory->createCar("electric");
echo $car->drive(); // Driving an electric car!
