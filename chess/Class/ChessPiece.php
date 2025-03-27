<?php
namespace Class;

interface Piece{
    function moveset();
}

abstract class ChessPiece{
    protected string $color;
    protected string $name;
    
    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    abstract protected function moveset();
}