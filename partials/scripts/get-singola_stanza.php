<?php
/*******************************
    GET DETAIL FOR ROOM BY ID
******************************/

require_once __DIR__ .'/database.php';

$id = empty($_GET['id']) ? false : $_GET['id'];

if($id) {
    
    $stmt = $conn->prepare("SELECT * FROM `stanze` WHERE `id`= ?");
    $stmt->bind_param('s', $id);
    // execute
    $stmt->execute();
    // get results
    $result = $stmt->get_result();

    if($result && $result->num_rows > 0) {
        $stanza = $result->fetch_assoc();
        //var_dump($stanza);
    }

}

// Close DB connection
$conn->close();