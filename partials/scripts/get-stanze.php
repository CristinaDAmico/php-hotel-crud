<?php
/*******************************
    GET DATA FOR ARCHIVE
******************************/

require_once __DIR__ .'/database.php';

// Ottieni stanze
$sql = "SELECT `id`, `room_number` FROM `stanze`";
$result = $conn->query($sql);

if($result && $result->num_rows > 0) {
    $stanze = [];

    while($row = $result->fetch_assoc()) {
        // popolare array stanze
        $stanze[] = $row;
    }
    //var_dump($stanze);
} else {
    echo 'query error';
}

// Close DB connection
$conn->close();
