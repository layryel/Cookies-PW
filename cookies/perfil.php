<?php
session_start();
ob_start();
include_once 'conexao.php';

if((!isset($_SESSION['id'])) AND (!isset($_SESSION['nome']))){ ;?>
    <p id="erro"><?php $_SESSION['msg'] = "Erro: Necessário realizar o login para acessar a página!";?></p> <?php
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <title>Perfil</title>
</head>

<body>
    <?php include("nav.php"); ?>

    <div class="container-login">
        <div class="content-box">
            <div class="form-box">
            <br>
            <div class="container text-center">
                <br><br>
                <h1>Bem vindo(a) <?php echo $_SESSION['nome']; ?>!</h1>
                <p>Ficamos muito felizes de te ter aqui conosco</p>
                <br>
                <a href="index.php"><button type="button" class="btn btn-success">Navegar</button></a>
                <br><br>
                <a href="sair.php"><button type="button" class="btn btn-danger">Deslogar</button></a>
            </div>
            </div>
        </div>
    </div>
        
</body>

</html>