<?php
require_once 'connection.php';

$stmt = $pdo->prepare("SELECT * FROM users");
$stmt->execute();

$count = 0;
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $count++;
}

echo "Number of users: " . $count;
?>