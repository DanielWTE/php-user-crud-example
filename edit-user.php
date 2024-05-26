<?php

require_once 'config.php';

// Check if the user ID is provided
if (!isset($_GET['id'])) {
    echo 'Benutzer-ID nicht gefunden!';
    exit;
}

// Get the user ID from the URL
$id = $_GET['id'];

// Get the user from the database
try {
    $sql = 'SELECT * FROM users WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);
    $user = $stmt->fetch();
} catch (Exception $e) {
    echo 'Fehler beim Abrufen des Benutzers: ' . $e->getMessage();
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benutzer Editieren</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <section class="container mx-auto p-4 flex flex-col items-center gap-4 bg-gray-100 text-center rounded-lg shadow-lg mt-8">
        <h1 class="text-4xl">Benutzer editieren</h1>
        <p>Editieren Sie den Benutzer.</p>
        <div class="flex gap-4">
            <form action="actions/update-user.php" method="post" class="flex flex-col gap-4">
                <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                <input type="text" name="username" value="<?php echo $user['username']; ?>" placeholder="Benutzername" class="p-2 rounded-lg" required>
                <input type="email" name="email" value="<?php echo $user['email']; ?>" placeholder="E-Mail-Adresse" class="p-2 rounded-lg" required>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Benutzer editieren</button>
            </form>
        </div>
        <a href="show-users.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Zurück zur Benutzerübersicht</a>
    </section>
</body>
</html>