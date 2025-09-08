<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

// Example static output
$response = [
    "name" => "Allen Clerk",
    "email" => "creatorzip.com"
];

echo json_encode($response);
?>
