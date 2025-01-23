<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        form {
            background-color: green;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        fieldset {
            border: 2px solid;
            padding: 0;
            margin: 0;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="text"]:focus,
        input[type="number"]:focus {
            border-color: #66afe9;
            outline: none;
            box-shadow: 0 0 5px rgba(102, 175, 233, 0.5);
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <form method="post" action="exo_cours.php">
        <fieldset>
            <label for="name">Firstname:</label>
            <input type="text" name="name" id="name" required> 

            <label for="prenom">Lastname: </label>
            <input type="text" name="prenom" id="prenom" required> 

            <label for="age">Age: </label>
            <input type="number" name="age" id="age" required> 

            <label for="numero">Numero de téléphone: </label>
            <input type="text" name="numero" id="numero" required> 
        </fieldset>
        <button type="submit" id="Valider">Valider</button>
    </form>
</body>
</html>
