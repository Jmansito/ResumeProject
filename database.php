<?php
$dsn = 'mysql:host=localhost; dbname=resume_website';
$username = 'admin';
$password = 'y7JY6rJGwfhufKZ';

//  Connecting using PDO object from class.
$db = new PDO($dsn, $username, $password);
try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    echo '<p>An error occurred while connecting to the database: $error_message </p>';
}
