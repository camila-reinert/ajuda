<?php

if(isset($_POST['submit']))
{

    include("conecta.php");

   $nome = $_POST['nome'];
   $email = $_POST['email'];
   $senha = $_POST['senha'];
   $telefone = $_POST['telefone'];
   $sexo = $_POST['genero'];
   $data_nasc = $_POST['data_nascimento'];
   $cidade = $_POST['cidade'];
   $estado = $_POST['estado'];
   $endereco = $_POST['endereco'];

   $comando = $pdo->prepare("INSERT INTO usuarios VALUES(null,'$nome','$email','$senha','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')" );
    // print_r($comando);
    // die();
    $resultado = $comando->execute();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        body
        {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(33, 20, 220), rgb(145, 92, 231));
        }
        .box
        {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
            color: white;
        }
        fieldset
        {
            border: 3px solid dodgerblue;
        }
        legend
        {
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
            color: white;
        }
        .inputBox
        {
            position: relative;
        }
        .inputUser
        {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput
        {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput
        {
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento
        {
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit
        {
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
            border: none;
            width: 100%;
            padding: 15px;
            border-radius: 10px;
            color: white;
            cursor: pointer;
        }
        #submit:hover
        {
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
        }
        a
        {
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 10px;
            padding: 10px;
            cursor: pointer;
            top: 10px
        }
        a:hover
        {
            background-color: dodgerblue;
        }
    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Formulario dos Clientes</b></legend>
            <br><br>
            <div class="inputBox">
                <input type="text" name="nome" id="nome" class="inputUser" required>
                <label for="nome" class="labelInput">Nome Completo</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="email" id="email" class="inputUser" required>
                <label for="email" class="labelInput">Email</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="password" name="senha" id="senha" class="inputUser" required>
                <label for="senha" class="labelInput">Senha</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                <label for="telefone" class="labelInput">Telefone</label>
            </div>
            <br>
            <br>
            <p>Sexo:</p>
            <input type="radio" name="genero" id="feminino" value="feminino" required>
            <label for="feminino">Feminino</label>
            <br>
            <input type="radio" name="genero" id="masculino" value="masculino" required>
            <label for="masculino">Masculino</label>
            <br>
            <input type="radio" name="genero" id="outro" value="outro" required>
            <label for="outro">Outro</label>
            <br>
            <br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
            <br><br>
            <div class="inputBox">
                <input type="text" name="cidade" id="cidade" class="inputUser" required>
                <label for="cidade" class="labelInput">Cidade</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="estado" id="estado" class="inputUser" required>
                <label for="estado" class="labelInput">Estado</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="endereco" id="endereco" class="inputUser" required>
                <label for="endereco" class="labelInput">Endereço</label>
            </div>
            <br>
            <br>
            <br>
            <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>