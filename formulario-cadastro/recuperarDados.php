<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações</title>
    <link rel="stylesheet" href="./css/recuperarDados.css">
</head>
<body>
    <?php 

        echo "<div class='container'>";
         echo "<h1> Suas Informações Pessoais </h1>";
         echo "<br />";
         echo "<div class='informacoes'>";  
            $nome= htmlspecialchars($_POST['txNome']);

            echo "<b> Nome: </b> " .$nome;
            echo "<br />";

            $Data = htmlspecialchars( $_POST['txData']);
            echo "<b> Data de Nascimento: </b>" . $Data;
            echo "<br />";

            $genero = htmlspecialchars ($_POST['txGenero']);
            echo "<b> Gênero:</b> " . $genero;
            echo "<br />";

            $estado = htmlspecialchars($_POST['txEstadoCivil']);
            echo "<b> Estado Civil:</b> " . $estado;
            echo "<br />";

            $email = htmlspecialchars ($_POST['txEmail']);
            echo "<b>E-mail:</b> " . $email;
            echo "<br />";

            $telefone = htmlspecialchars ($_POST['txTelefone']);
            echo "<b>Telefone:</b> " . $telefone;
            echo "<br />";

            $cep = htmlspecialchars ($_POST['txCep']);
            echo "<b>CEP:</b> " . $cep;
         echo "</div>";
            
        echo "</div>";
    ?>
</body>
</html>