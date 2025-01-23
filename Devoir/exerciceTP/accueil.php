<?php
$nom = $_POST['nom'];
$email = $_POST['email'];
$message = $_POST['message'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width: 100%;
            border: 2px solid;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table th, table td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        table th {
           background-color: #007bff;
           color: white;
        }

       table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #f1f1f1;
            transition: background-color 0.3s;
        }
    </style>
</head>
<body>
<table border="2">
            <tr>
                <th>Nom</th>
                <th>Adresse e-mail</th>
                <th>Message</th>
            </tr>
            <tr>
                <td><?php echo $nom;echo"<br>"; ?></td>
                <td><?php echo  $email?></td>
                <td><?php echo  $message;?></td>
            </tr>
    </table>        
</body>
</html>


