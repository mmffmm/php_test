<?php
// to change the color of the chessPiece

class ColorChanger{

    private $chessPiece;

    public function changeColor($chessPiece, $color){
        $this->chessPiece = $chessPiece;
        $this->chessPiece->color = $color;
    }
}