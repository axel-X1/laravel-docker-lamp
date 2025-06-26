<?php
try {
    $pdo = new PDO('mysql:host=mysql;dbname=laravel', 'laravel', 'password');
    echo "MySQL connection successful!\n";
} catch (Exception $e) {
    echo "MySQL connection failed: " . $e->getMessage() . "\n";
}
?> 