<?php

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = json_decode(file_get_contents("php://input"));
    $data->password = hash("sha256", $data->password);
    header("content-type: application/json; charset=utf-8");
    echo json_encode($data);
} else {
    die("bad request");
}