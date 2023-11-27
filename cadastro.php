<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/cpl.css">
    <title>Cadastro</title>
</head>

<body>
  
    <?php include("nav.php"); ?>

    <div class="container-login">
        <div class="content-box">
            <div class="form-box">
                <h2>Cadastro</h2>
                <form name="cadastro" action="functions/resposta.php" method="POST">
                    <div class="input-box">
                        <span>Nome Completo</span>
                        <input type="text" name="nome" placeholder="Digite o seu nome completo" required>
                    </div>
                    <div class="input-box">
                        <span>Email</span>
                        <input type="email" name="email" placeholder="@mail.com" required>
                    </div>
                    <div class="input-box">
                        <span>Telefone</span>
                        <input type="tel" name="telefone" placeholder="Digite o seu telefone" required>
                    </div>
                    <div class="input-box">
                        <span>Senha</span>
                        <input type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>
                    <div class="input-box">
                        <input type="submit" value="Cadastrar">
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>