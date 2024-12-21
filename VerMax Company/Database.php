<?php
// Database.php

$host = 'localhost';
$dbname = 'vermax';
$username = 'root';
$password = '';

try {
    // Create a new PDO connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Function to fetch employee login details
function fetchEmployeeDetails($employeeId) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM employees WHERE employee_id = :employee_id");
    $stmt->execute(['employee_id' => $employeeId]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// Function to fetch client invoice details
function fetchClientInvoice($invoiceId) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM invoices WHERE invoice_id = :invoice_id");
    $stmt->execute(['invoice_id' => $invoiceId]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// Additional helper functions can be added here as needed
?>
