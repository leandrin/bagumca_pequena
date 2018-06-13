<?php
$local = "localhost";
$user = "root";
$pass = "";
$db = "baguncinha";

// Check connection
$conexao = mysqli_connect($local, $user, $pass, $db);

// Check connection
if (!$conexao) {
    die(mysqli_connect_error());
}
echo "Conectado com sucesso";
?>
