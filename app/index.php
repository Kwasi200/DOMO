<?php
$hostname = $_SERVER['HTTP_HOST'];
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $carName = $_POST['car_name'];

    // Connect to MySQL database
    $conn = new mysqli("db", "root", "password", "car_db");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "SELECT * FROM cars WHERE name = '$carName'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $carDetails = $result->fetch_assoc();
        echo json_encode($carDetails);
    } else {
        echo json_encode(["error" => "Car not found"]);
    }

    $conn->close();
}
?>
