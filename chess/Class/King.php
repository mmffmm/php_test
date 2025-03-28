<?php
namespace Class;

class King extends ChessPiece{

    function __construct($color){
        parent::__construct("king", $color);
    }

    public function moveset(){
        return "moving forward";
    }
}