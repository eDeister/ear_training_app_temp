<?php
require_once 'config.php';

// Add a comment
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $comment = $_POST['comment'];

    $sql = "INSERT INTO comments (name, comment) VALUES (:name, :comment)";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':comment', $comment, PDO::PARAM_STR);
    $stmt->execute();
    exit();
}

// View comments
$sql = "SELECT * FROM comments ORDER BY timestamp DESC";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$comments = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($comments);
