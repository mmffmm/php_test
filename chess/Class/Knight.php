<?php
namespace Class;

class Knight extends ChessPiece{

    function __construct($color){
        parent::__construct("knight", $color);
    }

    public function moveset(){
        return "moving forward";
    }
}