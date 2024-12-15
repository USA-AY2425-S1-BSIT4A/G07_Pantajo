<?php
include 'db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $comment = $_POST['comment'];
    $rating = $_POST['rating'];

    $stmt = $conn->prepare("INSERT INTO user_reviews (username, comment, rating) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $username, $comment, $rating);

    if ($stmt->execute()) {
        header("Location: home.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>