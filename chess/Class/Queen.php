<?php
namespace Class;

class Queen extends ChessPiece implements Piece{

    function __construct($color){
        parent::__construct("queen", $color);
    }

    public function moveset(){
        return "moving diagonal + horizontal + vertical";
    }
}