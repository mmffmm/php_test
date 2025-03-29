<?php

/**
 * so instead of sending multiple params, or calling user->create() mulitple times, can just use builder
 * 1. Create animal.
 * 2. Create animal builder
 * 3. Create build function in builder
 */

class Animal{
    public $species;
    public $gender;
    public $size;

    public function speak(): void{
        if($this->species) echo "I'm a ".$this->species."\n";
        if($this->gender) echo "I'm a ".$this->gender."\n";
        if($this->size) echo "My size ".$this->size."\n";
        return;
    }
}

class AnimalBuilder{
    private $animal;

    function __construct(){
        $this->animal = new Animal();
    }

    public function setSpecies($species){
        $this->animal->species = $species;
        return $this; // NEEDED for method chaining. So that we chain object call
    }

    public function setGender($gender){
        $this->animal->gender = $gender;
        return $this;
    }

    public function setSize($size){
        $this->animal->size = $size;
        return $this;
    }

    // finally
    public function build(){
        return $this->animal;
    }

}

$snake = (new AnimalBuilder)
    ->setSpecies("Snake")
    ->setGender("Male")
    ->setSize("Big")
    ->build();

$boar = (new AnimalBuilder)
    ->setSpecies("Boar")
    ->setSize("Big")
    ->build();

$snake->speak();
$boar->speak();
