<?php 
include '../data/data.php';

header('Content-Type: application/json');

echo json_encode($albumData);
?>