<?php

require_once '../config.php';

// Delete the user from the database
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Check if the user ID is provided
    if (!isset($_GET['id'])) {
        echo 'Benutzer-ID nicht gefunden!';
        exit;
    }

    // Get the user ID from the URL
    $id = $_GET['id'];

    try {
        $sql = 'DELETE FROM users WHERE id = :id';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $id]);

        header('Location: ../show-users.php');
    } catch (Exception $e) {
        echo 'Fehler beim Löschen des Benutzers: ' . $e->getMessage();
    }
}

?>