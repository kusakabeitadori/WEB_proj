<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <style> 
    body{
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color:burlywood;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    }
    input{
    width: 80%;
    margin: 20px auto;
    padding: 20px;
    background: pink;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    }

    button{
        position: relative;
        color-scheme: pink;
    }
    </style>
</head>
<body>
    <form action="accueil.php" method="POST">
        <label for="nom" class="table">Nom:</label>
        <input type="text" name="nom" class="a"><br>
        <label for="email">Adrese e-mail:</label>
        <input type="text" name="email"><br>
        <label for="message">Message:</label>
        <input type="text" name="message"><br>
        <button type="submit">Envoyer</button>
</body>
</html>