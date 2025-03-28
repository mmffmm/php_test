<?php
namespace Class;

class Rook extends ChessPiece{

    function __construct($color){
        parent::__construct("rook", $color);
    }

    public function moveset(){
        return "moving forward";
    }
}