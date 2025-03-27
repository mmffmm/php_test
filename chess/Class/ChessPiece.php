<?php
namespace Class;

interface Piece{
    function moveset();
}

abstract class ChessPiece implements Piece{
    protected string $color;
    protected string $name;
    
    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    public function __get($property){
        if(property_exists($this, $property)){
            return $this->$property;
        }
        throw new Exception("Property '$property' doesn't exist!");
    }

    public function __set($property, $value){
        if(property_exists($this, $property)){
            $this->$property = $value;
            return;
        }
        throw new Exception("Property '$property' doesn't exist!");
    }

    // abstract protected function moveset();
}