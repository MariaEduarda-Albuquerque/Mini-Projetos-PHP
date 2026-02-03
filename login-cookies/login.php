<?php
    // Apaga os cookies
    if (isset($_GET['apagar'])) {
        setcookie('login_usuario', '', time() - 3600, '/');
        setcookie('login_senha', '', time() - 3600, '/');
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }
    // Se o formulário foi enviado
    if (isset($_POST['usuario']) && isset($_POST['senha'])) {
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        // Salva nos cookies por 7 dias
        setcookie('login_usuario', $usuario, time() + (7 * 24 * 60 * 60), '/');
        setcookie('login_senha', $senha, time() + (7 * 24 * 60 * 60), '/');

        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }
    // Recupera valores salvos se existirem
    $usuarioSalvo = isset($_COOKIE['login_usuario']) ? $_COOKIE['login_usuario'] : '';
    $senhaSalva   = isset($_COOKIE['login_senha']) ? $_COOKIE['login_senha'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

    <!-- Botão Apagar Cookies -->
    <div class="voltar">
        <form method="get" action="">
            <button type="submit" name="apagar" value="1" style="all: unset; cursor: pointer; display: block; text-align: center;">
                Apagar Cookies
            </button>
        </form>
    </div>
    
    <div class="main-login">
        <div class="left-login">
            <h1>Faça o Login <br>E entre para o nosso time</h1>
            <img src="astronauta.svg" class="right-login-image" alt="astronauta" srcset="">
        </div>

        <div class="right-login">
            <div class="card-login">
                <h1>LOGIN</h1>

                <form method="post" style="width: 100%;">
                    <div class="textfield">
                        <label for="usuario">Usuário</label>
                        <input type="text" name="usuario" placeholder="Usuário" value="<?= $usuarioSalvo ?>">
                    </div>

                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Senha" value="<?= $senhaSalva ?>">
                    </div>

                    <button class="btn-login" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
