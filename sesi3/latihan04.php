<?php
    $cars[0] = "volvo";
    $cars[1] = "BMW";
    $cars[2] = "toyota";

    header('content-type: application/json; charset=utf-8');
    echo json_encode($cars);
    