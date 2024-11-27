<?php
session_start();
if (!isset($_SESSION['user'])){
header('location: ../index.php');
exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Cadastro de Veículos</title>
    <link rel="stylesheet" href="../assets/css/style7.css"/>
</head>

<body>

    <fieldset>
        <legend>
            <br>
            <br>
            <h2><b>Preencha seus dados:</b></h2>
        </legend>

        <form id="veiculoForm" method="POST" action="pagina1.php" onsubmit="return enviarDados()">
            <b>Nome Completo:</b> 
            <input type="text" name="nome" placeholder="Digite seu nome completo" required>
            <br><br>

            <b>Telefone para contato:</b> 
            <input type="tel" name="tel" placeholder="(xx) xxxx-xxxx" required>
            <br><br>

            <b>E-mail:</b> 
            <input type="email" name="email" placeholder="Digite seu e-mail" required>
            <br><br>

            <b>Modelo do veículo:</b><br>
            <input type="text" id="marca" name="marca" placeholder="Digite a marca do veículo" required>
            <br><br>

            <b>Ano de fabricação:</b><br>
            <input type="number" id="ano" name="ano" min="1900" max="2024" required>
            <br><br>
<b>KM do veículo:</b><br>
            <input type="number" id="km" name="km" min="0" max="1000000" required>
            <br><br>

            <b>Opcionais do veículo:</b><br>
            <input type="checkbox" name="opcionais[]" value="Direção"> Direção Hidráulica
            <input type="checkbox" name="opcionais[]" value="Vidro"> Vidro Elétrico
            <input type="checkbox" name="opcionais[]" value="Ar"> Ar<br>
            <input type="checkbox" name="opcionais[]" value="Automático"> Automático
            <input type="checkbox" name="opcionais[]" value="Som"> Som
            <input type="checkbox" name="opcionais[]" value="Airbag"> AirBag
            <br><br>

            <input type="submit" value="Enviar seus dados">
        </form>

    </fieldset>

   

</body>

</html>