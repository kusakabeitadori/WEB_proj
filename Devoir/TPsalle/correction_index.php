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
        }
        th,td{
            padding: 10px;
            text-align: center;
        }
        p{
            text-align: center;
        }
        tr:nth-child(odd) {
            background-color: white; 
        }

        tr:nth-child(even) {
            background-color: palevioletred; 
            color: white; 
        }
        th{
            background-color: magenta;
        }
    </style>
</head>
<body>
    <?php
        $tab=[
            ["firstname"=>"HEGNO", "lastname"=>"Abi","age"=>18,"numero"=>96699098],
            ["firstname"=>"ABALO", "lastname"=>"Kokou","age"=>25,"numero"=>90002233],
            ["firstname"=>"DAMIEN", "lastname"=>"Judes","age"=>19,"numero"=>91154520],
            ["firstname"=>"AZUMA", "lastname"=>"Georges","age"=>23,"numero"=>99255178],
            ["firstname"=>"GBEVE", "lastname"=>"Moses","age"=>20,"numero"=>95802145],
            ["firstname"=>"DOGBE", "lastname"=>"Weget","age"=>19,"numero"=>90111542],
            ["firstname"=>"HEGNO", "lastname"=>"Abi","age"=>18,"numero"=>96699098],
            ["firstname"=>"HEGNO", "lastname"=>"Abi","age"=>18,"numero"=>96699098],
            ["firstname"=>"HEGNO", "lastname"=>"Abi","age"=>18,"numero"=>96699098],
        ];
    ?>
    <p>TABLEAU D'UTILISATEURS</p>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Age</th>
                <th>Numero de Téléphone</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach($tab as $user){ ?>
            <tr>
                <td><?php echo $user['firstname']?></td>
                <td><?php echo $user['lastname']?></td>
                <td><?php echo $user['age']?></td>
                <td><?php echo $user['numero']?></td>
            </tr>
            <?php } ?>
        ?>
        </tbody>
        
    </table>
</body>
</html>

