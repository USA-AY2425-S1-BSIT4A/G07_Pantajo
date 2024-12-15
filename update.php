<?php
include 'db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $comment = $_POST['comment'];
    $rating = $_POST['rating'];

    $stmt = $conn->prepare("UPDATE user_reviews SET comment=?, rating=? WHERE id=?");
    $stmt->bind_param("sii", $comment, $rating, $id);

    if ($stmt->execute()) {
        header("Location: home.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>