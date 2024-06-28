<?php 

function se_connecter():PDO
{
    $user="root";
$pass="";
try
{
    $conn = new PDO ("mysql: host=localhost;dbname=php_bd",$user,$pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
echo 'Erreur ' . $e -> get_message();
}
return $conn;
}



?>