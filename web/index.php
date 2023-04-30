<?php
require_once 'connection.php';

$stmt = $pdo->query('SELECT * FROM users');

echo 'RICHARD MARCHELINO WIJAYA TANZIL, TAN 2502008952 UTS SNA';
echo '<table>';
echo '<tr><th>ID</th><th>Name</th><th>Address</th><th>Position</th></tr>';

while ($row = $stmt->fetch()) {
    echo '<tr>';
    echo '<td>' . $row['id'] . '</td>';
    echo '<td>' . $row['name'] . '</td>';
    echo '<td>' . $row['address'] . '</td>';
    echo '<td>' . $row['position'] . '</td>';
    echo '</tr>';
}

echo '</table>';
?>