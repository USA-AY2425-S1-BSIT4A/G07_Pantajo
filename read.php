<?php
include 'db_config.php';

$sql = "SELECT * FROM user_reviews ORDER BY created_at DESC";
$result = $conn->query($sql);

$reviews = [];
while ($row = $result->fetch_assoc()) {
    $reviews[] = $row;
}

echo json_encode($reviews);
?>