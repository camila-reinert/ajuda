<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body
        {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(33, 20, 220), rgb(145, 92, 231));
        }
        .tela
        {
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 10px;
        }
        input
        {
            padding: 15px;
            border: none;
            outline: none;
        }
     .imputSubmit
        {
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
            padding: 10px;
            width: 100%;
            border: none;
            border-radius: 10px;
            color: white;
            cursor: pointer;
        }
        .imputSubmit:hover
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
    <div class="tela">
        <h1>Login</h1>
        <form action="testelogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input type="submit" class="imputSubmit" name="submit" value="enviar">
        </form>
    </div>
</body>
</html>