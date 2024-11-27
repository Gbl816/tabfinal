<?php
session_start();
if (isset($_POST['e_submit'])):
require_once("app/database/connect.php");
$user=$_POST['user'];
$pass=sha1($_POST['pwd']);
$sql = 'SELECT * FROM USUARIO WHERE nome="'.$user.'" and senha="'.$pass.'"';
$verificar = $conn->query($sql);
if($verificar->fetch()) {
$_SESSION['user'] = $user;
header('location: app/pagina1.php');
} else {
echo "<div id='voltar_por_erro'>Dados errados!</div>";
}
endif;
?>

<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tela de Login</title>
        <link rel="stylesheet" type="text/css" href="assets/css/style0.css">
    </head>
    <body>
        <div class="Login">
            <h1>Login</h1>
      
            <form
            method = "POST"
            action = "">
            <input type="text" id="username" placeholder="Usuario"  name="user" required>
            <br><br>
            <input type="password" id="password" placeholder="Senha" name="pwd" required>
            <br><br>
            <button type="submit" name="e_submit">Login</button>
           
        
        </div>
    </body>
</html>
    