<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit;
}

require_once '../src/config/database.php';

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$patient_name = $_POST['patient_name'];
$address = $_POST['address'];
$adm_date = $_POST['adm_date'];

$stmt = $conn->prepare("INSERT INTO PATIENT (PATIENT_NAME, ADDRESS, ADM_DATE) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $patient_name, $address, $adm_date);

if ($stmt->execute()) {
    header("Location: patient_form.php");
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>