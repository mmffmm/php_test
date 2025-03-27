<?php
namespace Class;

class Pawn extends ChessPiece implements Piece{

    function __construct($color){
        parent::__construct("pawn", $color);
    }

    public function moveset(){
        return "moving forward";
    }
}