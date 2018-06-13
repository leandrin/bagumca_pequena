<?php

require_once('connection.php');

$email = $_POST['email'];
$pass = md5($_POST['password']);

//$conexao = mysqli_connect('127.0.0.1', 'root', '', 'baguncinha');
$select = "SELECT * FROM usuarios_sistema WHERE email_usuario = '".$email."' and senha_usuario = '".$pass."'";

$insert = "INSERT INTO usuarios_sistema(email_usuario, senha_usuario) VALUES('$email', '$pass')";

//var_dump($insert);
$query = mysqli_query($conexao, $insert);

/*
$retorno = mysqli_num_rows($query);
echo $retorno;

if($retorno > 0){
  echo "Login efetuado com sucesso!";

  $_SESSION['usuario'] = $email['usuario'];

  $email = mysqli_fetch_assoc($query);

  // Se a sessão não existir, inicia uma
  if (!isset($_SESSION)) session_start();


  header("Location: menu.php"); exit;

}else{
  echo "Usuário ou senha inválidos";
}
*/

?>
