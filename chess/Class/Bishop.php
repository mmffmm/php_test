<?php
namespace Class;

class Bishop extends ChessPiece{

    function __construct($color){
        parent::__construct("bishop", $color);
    }

    public function moveset(){
        return "moving forward";
    }
}