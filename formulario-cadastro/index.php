<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Campos</title>
    <link rel="stylesheet" href="./css/index.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#txTelefone').mask('(00) 00000-0000');
            $('#txCep').mask('00000-000');
        });
    </script>
    
</head>
<body>
    
    <div class="container">
       
        <form action="recuperarDados.php" method="post"> 
        <h1>Formulário</h1>
            <div class="nome">
                <label for="txNome">Digite seu Nome:</label>
                <input type="text" name="txNome" id="txNome">   
            </div>

            <div class="data">
                <label for="txData">Digite sua data de nascimento:</label>
                <input type="date" name="txData" id="txData">
            </div>

            <div class="genero">
                <label for="txGenero">Digite seu gênero:</label>
                <select name="txGenero" id="txGenero" required>
                    <option value="" selected hidden> </option>
                    <option value="Feminino">Feminino</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Outros">Outros</option>
                </select>
            </div>

            <div class="estado">
                <label for="txEstadoCivil">Digite seu estado civil:</label>
                <select name="txEstadoCivil" id="txEstadoCivil" required>
                    <option value="" selected hidden> </option>
                    <option value="Casado">Casado(a)</option>
                    <option value="Divorciado">Divorciado(a)</option>
                    <option value="Solteiro">Solteiro(a)</option>
                    <option value="Viuvo">Viúvo(a)</option>
                </select>
            </div>

            <div class="email">
                <label for="txEmail">Digite seu E-mail:</label>
                <input type="email" name="txEmail" id="txEmail" >
            </div>

            <div class="telefone">
                <label for="txTelefone">Digite seu Telefone:</label>
                <input type="text" name="txTelefone" id="txTelefone" >
            </div>

            <div class="cep">
                <label for="txCep">Digite seu Cep:</label>
                <input type="text" name="txCep" id="txCep" >
            </div>

            <div class="enviar">
                <button class="enviar">Enviar</button>
            </div>
            
        </form>

    </div>
</body>
</html>