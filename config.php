<?php
require_once 'config.php';
require_once 'Template.php';

// Fetch comments from the database
$query = "SELECT * FROM comments ORDER BY timestamp DESC";
$stmt = $dbh->query($query);
$comments = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Render the comments in the HTML template
$template = new Template();
$template->render('comment.html', ['comments' => $comments]);
