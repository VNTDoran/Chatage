<?php
if (isset($_GET['command']) && $_GET['command'] === '!age') {
    $randomAge = rand(18, 99);
        header('Content-Type: application/json');
    echo json_encode(['response' => "Your random age is $randomAge"]);
}
?>
