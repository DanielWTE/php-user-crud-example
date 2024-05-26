<?php

require_once '../config.php';

// Form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the username and email from the form
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    // Validate the username and email
    if (empty($username) || empty($email)) {
        echo 'Bitte füllen Sie alle Felder aus!';
        exit;
    }

    // Check if the email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Ungültige E-Mail-Adresse!';
        exit;
    }

    // Update the user in the database
    try {
        $sql = 'UPDATE users SET username = :username, email = :email WHERE id = :id';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['username' => $username, 'email' => $email, 'id' => $id]);

        header('Location: ../show-users.php');
    } catch (Exception $e) {
        echo 'Fehler beim Aktualisieren des Benutzers: ' . $e->getMessage();
    }
}

?>