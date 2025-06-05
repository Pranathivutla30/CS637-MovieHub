<?php
// Database connection
$host = "localhost";
$user = "root";
$password = "";
$database = "movie";

$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch the top 10 grossing movies
$query = "
    SELECT series_title, gross
    FROM movies
    ORDER BY gross DESC
    LIMIT 10;
";
$result = $conn->query($query);

$data = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

$conn->close();

// Return data as JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
