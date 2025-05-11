<?php
session_start();

function login($username, $password) {
    // Here you would typically check the username and password against a database
    // For demonstration purposes, we'll use a hardcoded example
    if ($username === 'admin' && $password === 'password') {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: ../public/patient_form.php");
        exit;
    } else {
        return "Invalid username or password.";
    }
}

function logout() {
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../public/login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $error = login($username, $password);
    } elseif (isset($_POST['logout'])) {
        logout();
    }
}
?>