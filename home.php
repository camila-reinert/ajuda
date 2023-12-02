<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
    <style>
        body
        {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(33, 20, 220), rgb(145, 92, 231));
            text-align: center;
            color: white;
        }
        .box
        {
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 30px;
            border-radius: 10px;
            color: white;
        }
        a
        {
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 10px;
            padding: 10px;
            cursor: pointer;
        }
        a:hover
        {
            background-color: dodgerblue;
        }
    </style>
</head>
<body>
    <h1>Bombeiros</h1>
    <h1>Noar</h1>
    <div class="box">
        <a href="login.php">Login</a>
        <a href="formulario.php">Cadastre-se</a>
    </div>
</body>
</html>