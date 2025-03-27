<?php
require_once "autoload.php";
require_once "utils/printHelper.php";
include_once("Component/ColorChanger/ColorChanger.php");

use Class\Pawn;
use Class\Queen;

$pawnW = new Pawn("white");
println($pawnW->moveset());

$queenW = new Queen("white");
println($queenW->moveset());


/**
 * Component ColorChanger testing
 * To test out component
 */
println($queenW->color);
$colorChanger = new ColorChanger(); // color changer component
$colorChanger->changeColor($queenW, "black");
println($queenW->color);


/**
 * API testing.
 * Just simple demo for how API works
 * Steps:
 *      1. start local server in terminal
 *          php -S localhost:8000
 *      2. run test.php file in terminal
 * Current method using GET request, from file_get_contents
 */
$apiUrl = 'http://localhost:8000/API_testing/api.php'; // API endpoint
$response = file_get_contents($apiUrl);
$data = json_decode($response, true);  // Decode JSON response
println("Data from API: ");
println(print_r($data, true)); 