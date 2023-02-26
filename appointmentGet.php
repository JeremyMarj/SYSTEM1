<?php
    require_once "include/session.php";

    $json = array();
    $sqlQuery = "SELECT * FROM appointment WHERE user_id='".$_SESSION['customer_id']."' ORDER BY id";

    $result = mysqli_query($conn, $sqlQuery);
    $eventArray = array();
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($eventArray, $row);
    }
    mysqli_free_result($result);

    mysqli_close($conn);
    echo json_encode($eventArray);
?>