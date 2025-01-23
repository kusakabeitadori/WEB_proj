<?php
try
{
    $pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
    $connexion_a_la_page=new PDO ('mysql:host=localhost;dbname=devoir_web','root','',$pdo_options);
    echo "connection valide";

}
catch(Exception $e)
{
    die("ERROR : " .$e->getMessage());
    echo"Ton babierre";
}
echo s

?>