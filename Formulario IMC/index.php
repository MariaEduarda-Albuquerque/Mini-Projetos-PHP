<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

    <div class="container">
        <form class="form" action="recuperarDados.php" method="post">
            <h1>Calculo IMC</h1>
            <div class="informacoes">
                <div class="peso">
                    <label for="">Peso:</label>
                    <input type="text" name="txPeso" >
                </div>
            
                <div class="altura">
                    <label class="label" for="">Altura:</label>
                    <input type="text" name="txAltura" >
                </div>
            
                <div class="enviar">
                    <input type="submit" value="Enviar">
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>