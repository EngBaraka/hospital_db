<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Registration</title>
</head>
<body>
    <h1>Register New Patient</h1>
    <form action="save_patient.php" method="POST">
        <label for="patient_name">Patient Name:</label>
        <input type="text" id="patient_name" name="patient_name" required><br><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required><br><br>

        <label for="adm_date">Admission Date:</label>
        <input type="date" id="adm_date" name="adm_date" required><br><br>

        <button type="submit">Save</button>
    </form>
</body>
</html>