<?php

// Simulate a simple database (an array for this example)
$data = [
    ['id' => 1, 'name' => 'Chess Piece 1'],
    ['id' => 2, 'name' => 'Chess Piece 2'],
];

// Set the content type to JSON
header('Content-Type: application/json');

// Get the request method
$method = $_SERVER['REQUEST_METHOD'];

// Handle different types of requests
switch ($method) {
    case 'GET':
        // Return data (for example, returning all items)
        echo json_encode($data);
        break;
    
    case 'POST':
        // Handle POST request to create a new entry
        $inputData = json_decode(file_get_contents('php://input'), true);
        $newItem = ['id' => count($data) + 1, 'name' => $inputData['name']];
        $data[] = $newItem;
        echo json_encode($newItem);
        break;
    
    case 'PUT':
        // Handle PUT request to update an item
        $inputData = json_decode(file_get_contents('php://input'), true);
        $id = $inputData['id'];
        foreach ($data as &$item) {
            if ($item['id'] === $id) {
                $item['name'] = $inputData['name'];
                echo json_encode($item);
                exit;
            }
        }
        echo json_encode(['error' => 'Item not found']);
        break;
    
    case 'DELETE':
        // Handle DELETE request to delete an item
        $inputData = json_decode(file_get_contents('php://input'), true);
        $id = $inputData['id'];
        foreach ($data as $key => $item) {
            if ($item['id'] === $id) {
                unset($data[$key]);
                echo json_encode(['message' => 'Item deleted']);
                exit;
            }
        }
        echo json_encode(['error' => 'Item not found']);
        break;
    
    default:
        // Method not allowed
        echo json_encode(['error' => 'Method not allowed']);
        break;
}
