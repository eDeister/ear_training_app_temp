<?php

/*    Name: Sajal Khadgi
      This php page is for pdo, comment and mysql table
      For database connection established
*/
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

// Set response headers to indicate JSON content
header('Content-Type: application/json');
echo json_encode($comments);
