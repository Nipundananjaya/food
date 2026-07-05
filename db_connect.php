<?php
// ============================================================
// SmartServe – Database Connection (PDO)
// File: db_connect.php
// ============================================================

// Database credentials – Supabase
$host     = 'aws-0-ap-southeast-2.pooler.supabase.com';
$port     = '6543';
$dbname   = 'postgres';
$username = 'postgres.phheuvsnkllqxjkgoodh';
$password = 'Dananjaya400902#';

try {
    // Create PDO connection for PostgreSQL
    $pdo = new PDO(
        "pgsql:host=$host;port=$port;dbname=$dbname",
        $username,
        $password,
        [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ]
    );
} catch (PDOException $e) {
    // Return JSON error so the frontend can handle it
    header('Content-Type: application/json');
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Database connection failed. Please check your Supabase connection settings.'
    ]);
    exit;
}
?>
