<?php
require_once 'config.php';

// Fetch comments from the database
$query = "SELECT * FROM comments ORDER BY timestamp DESC";
$stmt = $dbh->query($query);
$comments = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Render the comments in the HTML template
$view = new Template();
echo $view->render('views/comment.html', ['comments' => $comments]);
