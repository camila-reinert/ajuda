<?php
$comando = $pdo->prepare("SELECT * FROM cadastro WHERE email = '$email' and senha = '$senha'");
$resultado = $comando->execute();
$n = 0;
$admin = "s";

while($linhas = $comando->fetch())
{
    $n = 1;
    $admin = $linhas["admin_usu"];
    

 }

// if($n > 0)
// {
//     header("location:pag1.html");

// }
if($n == 1)
{
    if($admin == "s")
    {
       header("location:menuadm.html");
        $_SESSION['usuario_logado']=$linhas["email"];

    } 
    else{
        header("location:paciente.html");
        $_SESSION['usuario_logado']=$linhas["email"];
    }
}
 else {
    
    $_SESSION['erro'] = "Usuário não encontrado. Verifique suas credenciais.";
    header("Location: login.html");
}

?>
?>