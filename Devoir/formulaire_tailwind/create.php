<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <!-- Ajout du CDN de Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex justify-center items-center min-h-screen bg-gray-100">
    <form method="post" action="exo_cours.php" class="bg-green-500 p-6 rounded-lg shadow-md w-full max-w-md">
        <fieldset class="border-2 border-gray-300 p-4 rounded-md">
            <label for="name" class="block text-white font-semibold mb-2">Firstname:</label>
            <input type="text" name="name" id="nom" required 
                   class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 mb-4">

            <label for="prenom" class="block text-white font-semibold mb-2">Lastname:</label>
            <input type="text" name="prenom" id="prenom" required 
                   class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 mb-4">

            <label for="age" class="block text-white font-semibold mb-2">Age:</label>
            <input type="number" name="age" id="age" required 
                   class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 mb-4">

            <label for="numero" class="block text-white font-semibold mb-2">Numero de téléphone:</label>
            <input type="text" name="numero" id="tel" required 
                   class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 mb-4">
        </fieldset>
        <button type="submit" id="Valider" 
                class="w-full mt-4 bg-blue-600 text-white py-2 rounded-lg font-bold hover:bg-blue-700 transition duration-300">
            Valider
        </button>
    </form>
</body>
</html>
