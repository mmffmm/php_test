<?php

// abstract = skeleton class
// interface = rule book

interface Fly{
    public function fly();
}

abstract class Animal{
    protected string $name;

    public function __construct(string $name){
        $this->name = $name;
    }

    abstract public function makeSound();

    public function getName(): string{
        return $this->name;
    }
}

class Bird extends Animal implements Fly{
    public function makeSound(): string{
        return "Chirp chirp mf!";
    }

    public function fly(): string{
        return "Currently flying";
    }
}

$bird1 = new Bird("Crow1");
$bird1->makeSound(); // Chirp chirp mf!
$bird1->fly();