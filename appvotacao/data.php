<?php
    header('Content-Type: application/json');

    $conn = mysqli_connect("localhost","u751391022_votacao","o^P4fX2wigk","u751391022_votacao");

    $sqlQuery = "SELECT VOTOS FROM votos_teste ORDER BY id";

    $result = mysqli_query($conn,$sqlQuery);

    $data = [];

    foreach ($result as $row) {
        $data[] = $row;
    }

    mysqli_close($conn);

    echo json_encode($data);
