<?php
namespace Class;

class Pawn extends ChessPiece{

    function __construct($color){
        parent::__construct("pawn", $color);
    }

    public function moveset(){
        return "moving forward";
    }
}