<?php
// Helper functions for database queries, sanitization, and business logic

// Database query function
function db_query($query, $params = []) {
    $pdo = new PDO('mysql:host=localhost;dbname=your_database', 'username', 'password');
    $stmt = $pdo->prepare($query);
    $stmt->execute($params);
    return $stmt;
}

// Sanitize input
function sanitize($input) {
    return htmlspecialchars(strip_tags($input));
}

// Example business logic function
function calculate_discount($price, $discount) {
    return $price - ($price * ($discount / 100));
}
?>