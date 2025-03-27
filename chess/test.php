<?php
require_once "autoload.php";
include_once("Component/ColorChanger/ColorChanger.php");

use Class\Pawn;
use Class\Queen;

$pawnW = new Pawn("white");
echo($pawnW->moveset());

$queenW = new Queen("white");
echo($queenW->moveset());

echo("\n");
echo($queenW->color);

$colorChanger = new ColorChanger(); // color changer component
$colorChanger->changeColor($queenW, "black");
echo("\n");
echo($queenW->color);
