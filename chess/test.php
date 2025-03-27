<?php
require_once "autoload.php";

use Class\Pawn;
use Class\Queen;

$pawnW = new Pawn("white");
echo($pawnW->moveset());

$queenW = new Queen("white");
echo($queenW->moveset());
