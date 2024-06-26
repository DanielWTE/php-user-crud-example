<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startseite</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <section class="container mx-auto p-4 flex flex-col items-center gap-4 bg-gray-100 text-center rounded-lg shadow-lg mt-8">
        <h1 class="text-4xl">Startseite</h1>
        <p>Willkommen auf der Startseite!</p>
        <div class="flex gap-4">
            <a href="show-users.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Benutzer anzeigen</a>
            <a href="create-user.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Benutzer erstellen</a>
        </div>
    </section>
</body>
</html>